<html>
<head>
<script>
	function m()
		{
		 alert("edit okay?");
		}
		function m2()
		{
				window.location="user1.php";
		}
</script>
<style>
	#d1{
                
                position:relative;
                height:25%;
                width:100%;
                top:0px;
                right:0px;
                left:0px;
                background-image:linear-gradient(to bottom right,indigo,#9213C7);
            }
        #d3{
                border:none;
                position:relative;
                width:100%;
                height:5%;
                right:0px;
                left:0px;
                bottom:0px;
            }
                #logout{
                    position:relative;
                    float:right;
                    font-size:25px;
                    right:180px;
                    top:65px;
                    text-decoration:none;
                    color:black;
                    background:none;
                    padding:0px;
                    border:none;
                    font-family:berlin sans fb;
                }
        #logout:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        #copy{
                    color:white;
                    font-size:12px;
                }
            

#i1{
position:relative;
left:20px;
height:95%;
width:12.5%;
top:8px;
}
#a1{
position:relative;
left:50px;
font-size:60;
font-family:Times New Roman;
bottom:45px;
}
#a2{
				position:relative;
				left:850px;
				top:-55px;	
			}
			#Back{
                    position:relative;
                    float:right;
                    font-size:25px;
                    right:210px;
                    top:65px;
                    text-decoration:none;
                    color:black;
                    background:none;
                    padding:0px;
                    border:none;
                    font-family:berlin sans fb;
}
#Back:hover{
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }

            

</style>
</head>
<body>
	    <div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
       <b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
	   <b><input type="button" id="b1" value="Back" onclick="m2()"/></b>
</div>
<div id="d2">
<p align="center">
<font size=28>
<?php
if (isset($_POST['submit'])) {
	$yr=$_POST["yr"];
}
include("conn.php");
if (isset($yr)) {
	$yr=strip_tags($yr);
    $yr=mysqli_real_escape_string($con,$yr);
}
 $abc="SELECT name,comments,heads, sdate, edate, TIMESTAMPDIFF(DAY, sdate, edate) AS duration FROM all_events WHERE YEAR(sdate)='$yr'";
  $result=mysqli_query($con,$abc);
 if(!$result){
	 die('records not found '.mysqli_errno($con));
 }
 echo "<table width='100%' border='1'>";
 echo "<tr>";
 echo"<caption><font size=32> REPORTS OF THE YEAR $yr </font></caption>";
 echo "<th>Name</th><th>Start Dt</th><th>Duration</th><th>Venue</th><Guest/Speaker</th><th>Comments</th><th>Student Rep</th>";
 echo "</tr>";

 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	 echo "<tr>";
 echo "<td>$row[name]</td><td>$row[sdate]</td><td>$row[edate]</td><td>$row[duration]</td><td>$row[comments]</td><td>$row[heads]</td>";
	 echo "</tr>";
 }
 echo "</table>";
?>
</p>
</font>
</div>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div>
</body>
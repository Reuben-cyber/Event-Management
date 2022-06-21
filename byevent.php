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
#i2{
				position:relative;
				height:4%;
				width:4%;
				top:4px;
				bottom:4px;
				
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
			#b1{
					position:relative;
					float:right;
					font-size:25px;
					right:230px;
					top:65px;
					text-decoration:none;
					color:black;
					background:none;
					padding:0px;
					border:none;
					font-family:berlin sans fb;
			}
			#copy{
                    color:white;
                    font-size:12px;
                }
				.pop-out{
					transition: transform .5s;
				}
				.pop-out:hover {
					-ms-transform: scale(3.5, 3.5);
					-webkit-transform: scale(3.5, 3.5);
					transform: scale(3.5, 3.5);
				}
            

            

</style>
</head>
<body>
	    <div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
        <b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
		<b><input type="button" id="back" value="Back" onclick="m2()" style='text-decoration:none;color:white;'/></b>
		</div>
<div id="d2">
<p align="center">
<font size=28>
<?php
session_save_path('../tmp');
session_start();

if($_SESSION["logged_in"]) {
if (isset($_GET['id'])) {
	$event=$_GET["id"];
}
include("conn.php");
$_SESSION["event"]=$event;
 $abc="SELECT name,comments,heads, sdate, edate,venue,imagename FROM all_events WHERE name='$event'";
  $result=mysqli_query($con,$abc);
 if(!$result){
	 die('records not found '.mysqli_errno($con));
 }
 echo "<table width='100%' border='1'>";
 echo "<tr>";
 echo"<caption><font size=32> REPORTS OF $event </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href='prn_byevent' target='_blank'><img id='i2' src='print.png'></img></a></caption>";
 echo "<th>Name</th><th>Start Dt</th><th>End Dt</th><th>Venue</th><th>Comments</th><th>Heads</th><th>Photos</th>";
 echo "</tr>";

 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	 echo "<tr>";
 echo "<td>$row[name]</td><td>$row[sdate]</td><td>$row[edate]</td><td>$row[venue]</td><td>$row[comments]</td><td>$row[heads]</td><td><img src='upload/$row[imagename]' class='pop-out' width='58px' height='58px'></td>";
	 echo "</tr>";
 }
 echo "</table>";
 } else {
	echo "You are not authorized to use this software! Login properly.";
}
?>
</p>
</font>
</div>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div>
</body>
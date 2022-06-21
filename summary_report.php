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
			#i2{
				position:relative;
				height:4%;
				width:4%;
				top:4px;
				bottom:4px;
				
			}

            

</style>
</head>
<body>
	    <div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
        <b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
		 <b><input type="button" id="b1" value="Back" onclick="m2()"style='text-decoration:none;color:white;'/></b>
</div>
<?php
session_save_path("../tmp");
session_start();

if($_SESSION["logged_in"]){
include("conn.php");
$a1="SELECT name, COUNT(name) AS cnt_name, SUM(budget) AS budget_sofar, MAX(footfall) AS max_footfall FROM all_events GROUP BY name ORDER BY name";
$result=mysqli_query($con,$a1);
if(!$result){die('error summing up data...'.mysqli_error($con));}
echo "<center><font size='16'>SUMMARY REPORT</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href='prn_summary' target='_blank'><img id='i2' src='print.png'></img></a></center><br>";
echo "<table width='100%' border='1'>";
echo "<th>Event Name</th><th>Count</th><th>Budget Used So Far</th><th>Max. Footfall</th>";
while($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>$row[name]</td><td>$row[cnt_name]</td><td>$row[budget_sofar]</td><td>$row[max_footfall]</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "you are not authorized to use this software. Login properly";
}
?>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div>
</body>
</html>
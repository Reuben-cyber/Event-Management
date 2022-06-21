<html>
<head>
<script>
	function m()
		{
		 alert("Are You Sure?");
		}
		function logout()
		{
			    alert("Logging out");
				window.location="login.php";
		}
		function m2()
		{
				window.location="adminpg.php";
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
                top:0px;
                right:0px;
                left:0px;
                bottom:0px;
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
            #Back{
                    position:relative;
                    float:right;
                    font-size:24;
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
#submit{
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;
        background-image:linear-gradient(to bottom right,indigo,#9213C7);
        }

       #submit:hover {
           background-color: green; 
           color: white;
           ;
        }
        
        #reset{
        -webkit-transition-duration: 0.4s; 
        transition-duration: 0.4s;
        background-image:linear-gradient(to bottom right,indigo,#9213C7);
        }

       #reset:hover {
           background-color:red; 
           color: white;
           ;
        }  
#a2{
				position:relative;
				left:850px;
				top:-55px;	
			}		
</style>

</head>
<body>
 <div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
        <b> <a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a </b>
		<b><input type="button" id="back" value="Back" onclick="m2()" style='text-decoration:none;color:white;'/></b>
</div>
<form name="convert" action="ttoa.php" method="POST">
<?php
session_save_path('../tmp');
session_start();

if($_SESSION["logged_in"]) {
include("conn.php");
$abc="SELECT e_name FROM event_names WHERE e_type='T'";
$result=mysqli_query($con,$abc);
if(!$result){
die('No Temporary Events');
}
$tempoptions=array();
$tempoptions[]="<option value=''></option>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$tempoptions[]="<option value='$row[e_name]'>$row[e_name]</option>";
}
echo "<font size=14><center>Select Event Name:";
echo "<select name='eventname' REQUIRED>".implode('\n',$tempoptions)."</select><br>";
echo "<input type='submit' name='submit' value='ok'></center></font>";
} else {
	echo "You are not authorized to use this software! Login properly.";
}
?>

</form>
</div>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div>

</body>
</html>


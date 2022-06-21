<html>
<head>
<script>
	function m()
		{
		 alert("edit okay?");
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

            

</style>
</head>
	    <div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
        <b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
		<b><input type="button" id="b1" value="Back" onclick="adminpg.php" style='text-decoration:none;color:white;'/></b>
</div>
<?php
//session_save_path('../tmp');
//session_start();

//if($_SESSION["logged_in"]) {
include("conn.php");
if(isset($_POST["submit"]))
{

$name=$_POST["name"];
$type=$_POST["type"];
$pass=$_POST["pass"];
$username=$_POST["username"];
}

if (isset($Uname)){
	$Uname=strip_tags($Uname);
	$Uname=mysqli_real_escape_string($con,$Uname);
}

if(isset($type)){
	$type=strip_tags($type);
	$type=mysqli_real_escape_string($con,$type);
} 
if(isset($pass)){
	$pass=strip_tags($pass);
	$pass=mysqli_real_escape_string($con,$pass);
} 
if(isset($userame)){
	$userame=strip_tags($userame);
	$userame=mysqli_real_escape_string($con,$userame);
} 
$sql= "UPDATE user SET type='$type', pass='$pass', Uname='$username' WHERE Name='$name'";

if (mysqli_query($con, $sql)) 
{
      echo "User Updated Successfully";
} 
else 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
//} 
//else
	//	 {
	//echo "You are not authorized to use this software! Login properly.";
//}

?>
</div>

<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
			
    </div>
</body>
<?php

session_save_path('../tmp');

session_start();
include("conn.php");

if(isset($_POST["submit"])){
$susername=$_POST['usrname'];
$spassword=$_POST['psw'];
$susername=strip_tags($susername);
$spassword=strip_tags($spassword);
$susername=mysqli_real_escape_string($con,$susername);
$spassword=mysqli_real_escape_string($con,$spassword);
}

$sql="SELECT * FROM user WHERE Uname='".$susername."' AND pass='".$spassword."'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_array($run,MYSQLI_ASSOC);

if(mysqli_num_rows($run) == 1){
	$_SESSION['logged_in']=true;	
	$_SESSION['myname']=$row['Name'];
	if($row['type'] == "ADMIN"){
		header("Location: adminpg.php");
	} else {
               
		header("Location: user1.php");
 	}
} else {
	echo "<script>alert('Wrong username and / or password!');window.location.href='index.php';</script>";
}

//mysqli_free_result($con);
mysqli_close($con);

?>	
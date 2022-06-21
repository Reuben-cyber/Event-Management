<html>
<head>
<script>
	function m()
		{
		 alert("edit okay?");
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
		<b><input type="button" id="b1" value="Back" onclick="user1.php" style='text-decoration:none;color:white;'/></b>
</div>
<?php
session_save_path('../tmp');
session_start();

if($_SESSION["logged_in"]) {
include("conn.php");
if(isset($_POST["submit"]))
{

$name=$_POST["name"];
$comments=$_POST["comments"];
$venue=$_POST["venue"];
$theme=$_POST["theme"];
$heads=$_POST["heads"];
$sdate=$_POST["sdate"];
$edate=$_POST["edate"];
$budget=$_POST["budget"];
$numevents=$_POST["numevents"];
$events=$_POST["events"];
$numparticipants=$_POST["numparticipants"];
$footfall=$_POST["footfall"];
$winners=$_POST["winners"];
$topic=$_POST["topic"];
$speakers=$_POST["speakers"];
$numdelegates=$_POST["numdelegates"];
$numteams=$_POST["numteams"];
$chiefguests=$_POST["chiefguests"];
$service=$_POST["service"];
$teamleaders=$_POST["teamleaders"];
$ser_provided_to=$_POST["ser_provided_to"];
$commofficer=$_POST["commofficer"];
$numsold=$_POST["numsold"];
$category=$_POST["category"];
$numbooks=$_POST["numbooks"];
$supplier=$_POST["supplier"];
$genres=$_POST["genres"];
$file_name=$_POST["oldfile"];
}

if (isset($name)){
	$name=strip_tags($name);
	$name=mysqli_real_escape_string($con,$name);
}

if(isset($comments)){
	$comments=strip_tags($comments);
	$comments=mysqli_real_escape_string($con,$comments);
} else {
	$comments=NULL;
}
if(isset($venue)){
	$venue=strip_tags($venue);
	$venue=mysqli_real_escape_string($con,$venue);
} else {
	$venue=NULL;
}
if(isset($theme)){
	$theme=strip_tags($theme);
	$theme=mysqli_real_escape_string($con,$theme);
} else {
	$theme=NULL;
}
if(isset($heads)){
	$heads=strip_tags($heads);
	$heads=mysqli_real_escape_string($con,$heads);
} else {
	$heads=NULL;
}
if(isset($sdate)){
	$sdate=strip_tags($sdate);
	$sdate=mysqli_real_escape_string($con,$sdate);
}
if(isset($edate)){
	$edate=strip_tags($edate);
	$edate=mysqli_real_escape_string($con,$edate);
} else {
	$edate=NULL;
}
if(isset($budget)){
	$budget=strip_tags($budget);
	$budget=mysqli_real_escape_string($con,$budget);
} else {
	$budget=NULL;
}
if(isset($numevents)){
	$numevents=strip_tags($numevents);
	$numevents=mysqli_real_escape_string($con,$numevents);
} else {
	$numevents=NULL;
}
if(isset($events)){
	$events=strip_tags($events);
	$events=mysqli_real_escape_string($con,$events);
} else {
	$events=NULL;
}
if(isset($numparticipants)){
	$numparticipants=strip_tags($numparticipants);
	$numparticipants=mysqli_real_escape_string($con,$numparticipants);
} else {
	$numparticipants=NULL;
}
if(isset($footfall)){
	$footfall=strip_tags($footfall);
	$footfall=mysqli_real_escape_string($con,$footfall);
} else {
	$footfall=NULL;
}
if(isset($winners)){
	$winners=strip_tags($winners);
	$winners=mysqli_real_escape_string($con,$winners);
} else {
	$winners=NULL;
}
if(isset($topic)){
	$topic=strip_tags($topic);
	$topic=mysqli_real_escape_string($con,$topic);
} else {
	$topic=NULL;
}
if(isset($speakers)){
	$speakers=strip_tags($speakers);
	$speakers=mysqli_real_escape_string($con,$speakers);
} else {
	$speakers=NULL;
}
if(isset($numdelegates)){
	$numdelegates=strip_tags($numdelegates);
	$numdelegates=mysqli_real_escape_string($con,$numdelegates);
} else {
	$numdelegates=NULL;
}
if(isset($numteams)){
	$numteams=strip_tags($numteams);
	$numteams=mysqli_real_escape_string($con,$numteams);
} else {
	$numteams=NULL;
}
if(isset($chiefguests)){
	$chiefguests=strip_tags($chiefguests);
	$chiefguests=mysqli_real_escape_string($con,$chiefguests);
} else {
	$chiefguests=NULL;
}
if(isset($service)){
	$service=strip_tags($service);
	$service=mysqli_real_escape_string($con,$service);
} else {
	$service=NULL;
}
if(isset($teamleaders)){
	$teamleaders=strip_tags($teamleaders);
	$teamleaders=mysqli_real_escape_string($con,$teamleaders);
} else {
	$teamleaders=NULL;
}
if(isset($ser_provided_to)){
	$ser_provided_to=strip_tags($ser_provided_to);
	$ser_provided_to=mysqli_real_escape_string($con,$ser_provided_to);
} else {
	$ser_provided_to=NULL;
}
if(isset($commofficer)){
	$commofficer=strip_tags($commofficer);
	$commofficer=mysqli_real_escape_string($con,$commofficer);
} else {
	$commofficer=NULL;
}
if(isset($numsold)){
	$numsold=strip_tags($numsold);
	$numsold=mysqli_real_escape_string($con,$numsold);
} else {
	$numsold=NULL;
}
if(isset($category)){
	$category=strip_tags($category);
	$category=mysqli_real_escape_string($con,$category);
} else {
	$category=NULL;
}
if(isset($numbooks)){
	$numbooks=strip_tags($numbooks);
	$numbooks=mysqli_real_escape_string($con,$numbooks);
} else {
	$numbooks=NULL;
}
if(isset($supplier)){
	$supplier=strip_tags($supplier);
	$supplier=mysqli_real_escape_string($con,$supplier);
} else {
	$supplier=NULL;
}
if(isset($genres)){
	$genres=strip_tags($genres);
	$genres=mysqli_real_escape_string($con,$genres);
} else {
	$genres=NULL;
}

//Logic for file upload
$allowedExts = array("jpg", "jpeg", "gif", "png");
$parts = explode(".", $_FILES["file"]["name"]);
$extension = end($parts);
echo $_FILES["file"]["tmp_name"];
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/jpg"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    $msg="Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    $msg="Upload: " . $_FILES["file"]["name"] . "<br />";
    $msg=$msg."Type: " . $_FILES["file"]["type"] . "<br />";
    $msg=$msg."Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    $msg=$msg."Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      $msg=$msg."Since the files already exists rename the file on your comp and upload it using Update Report option on the menu.";
      }
      else {
      move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
      $msg=$msg."Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
	$file_name=$_FILES["file"]["name"];
  }
else
  {
  $msg="Invalid file because you have not selected an image file for this event at this time. Use Update Report option from the menu and update the photo of this event.";
  
  $file_name=strip_tags($file_name);
  }
//Logic for file upload endend
echo $msg."<br>";

	
	$sql= "UPDATE all_events SET comments='$comments' ,Venue='$venue', theme='$theme', heads='$heads', budget='$budget', numevents='$numevents', events='$events', numparticipants='$numparticipants', footfall='$footfall', winners='$winners', topic='$topic', speaker='$speakers', numdelegates='$numdelegates', numteams='$numteams', chiefguests='$chiefguests', service='$service', teamleaders='$teamleaders', ser_provided_to='$ser_provided_to', commofficer='$commofficer', numsold='$numsold', category='$category', numbooks='$numbooks', supplier='$supplier', genres='$genres', imagename='$file_name' WHERE name='$name' AND YEAR(sdate)='$sdate'";

if (mysqli_query($con, $sql)) 
{
      echo "Report Updated Successfully";
} 
else 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
} 
else
		 {
	echo "You are not authorized to use this software! Login properly.";
}

?>
</div>

<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
			
    </div>
</body>
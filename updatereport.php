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

            

</style>
</head>
	    <div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b><a id="a1">EventDoc </a></b>
        <b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
		<b><input type="button" id="b1" value="Back" onclick="m2()"style='text-decoration:none;color:white;'/></b>
</div>
<div id="d2">
<center>
<font size=28>
<?php
session_save_path('../tmp');
session_start();

if($_SESSION["logged_in"]) {
include("conn.php");
if(isset($_POST["submit"])){
$yr=$_POST["yr"]; echo $yr;
$ename=$_POST["ename"];
}
echo "-".$ename;
if(isset($yr)){
$yr=strip_tags($yr);
$yr=mysqli_real_escape_string($con,$yr);
}
if(isset($ename)){
$ename=strip_tags($ename);
$ename=mysqli_real_escape_string($con,$ename);
}

$abc="SELECT * FROM all_events WHERE name='$ename' AND YEAR(sdate) = '$yr'";
$result=mysqli_query($con,$abc);
if(!$result){die('error '.mysqli_errno($con));}
echo "<form action='updatedreport.php' method='post'>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$tempsname=$row["heads"];
	echo "<table>";
	echo "<tr> <td>&nbsp;</td> </tr>";
echo "<tr>";
    echo "<td align='center'><font size =5>Comments</font> </td>";
    echo"<td>";
        echo"<textarea name='comments' cols='45' rows='10'>$row[comments]</textarea>";
    echo "</td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Venue:</font></td>";
    echo"<td><input type='text' name='venue' value='$row[Venue]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Theme:</font></td>";
   echo"<td><input type='text' name='theme' value='$row[theme]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";

    echo"<td align='center'><font size =5>Heads:</font></td>";
	 include("conn.php");
    $headsoptions=array();
    $headsoptions[]="<option value=''></option>";
    $sql="SELECT Name FROM user ORDER BY Name";
    $results1=mysqli_query($con,$sql);
    if(!$results1)
	{
		die('records not found '.mysqli_errno($con));
	}
	
    while($row1=mysqli_fetch_array($results1,MYSQLI_ASSOC))
	{
		if($tempsname == $row1['Name']) {
			$headsoptions[]="<option value='$row1[Name]' selected='selected'>$row1[Name]</option>";
		} else {
			$headsoptions[]="<option value='$row1[Name]'>$row1[Name]</option>";
		}
    }
    mysqli_close($con);
    echo "<td><SELECT name='heads' REQUIRED value='$row[heads]'>".implode('\n',$headsoptions)."</SELECT></td>";
	 
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Venue:</font></td>";
    echo"<td><input type='text' name='venue' REQUIRED value='$row[Venue]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Start Date:</font></td>";
    echo"<td><input type='date' name='sdate' REQUIRED value='$row[sdate]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>End Date:</font></td>";
    echo"<td><input type='date' name='edate' REQUIRED value='$row[edate]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Budget: ₹</font></td>";
echo"<td><input type='number' name='budget'value='$row[budget]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
   echo"<tr>"; 
    echo"<td align='center'><font size =5>Number of Events:</font></td>";
    echo"<td><input type='number' name='numevents' value='$row[numevents]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Events</font> </td>";
    echo"<td>";
        echo"<textarea name='events' cols='45' rows='10' value='$row[events]'></textarea>";
    echo"</td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Number of Participants:</font></td>";
    echo"<td><input type='number' name='numparticipants' value='$row[numparticipants]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Footfall:</font></td>";
    echo"<td><input type='number' name='footfall' value='$row[footfall]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Winners:</font></td>";
    echo"<td><input type='text' name='winners' value='$row[winners]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Topic:</font></td>";
    echo"<td><input type='text' name='topic' value='$row[topic]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Speakers:</font></td>";
    echo"<td><input type='text' name='speakers' value='$row[speaker]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Number of Delegates:</font></td>";
    echo"<td><input type='number' name='numdelegates' value='$row[numdelegates]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Number of Teams:</font></td>";
    echo"<td><input type='number' name='numteams'value='$row[numteams]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Chief Guests:</font></td>";
    echo"<td><input type='text' name='chiefguests'value='$row[chiefguests]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Service:</font></td>";
    echo"<td><input type='text' name='service' value='$row[service]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Team Leaders:</font></td>";
    echo"<td><input type='text' name='teamleaders' value='$row[teamleaders]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Service provided to:</font></td>";
    echo"<td><input type='text' name='ser_provided_to' value='$row[ser_provided_to]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Comm.Officer:</font></td>";
    echo"<td><input type='text' name='commofficer'  value='$row[commofficer]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Number of Tickets sold:</font></td>";
    echo"<td><input type='number' name='numsold' value='$row[numsold]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Category:</font></td>";
    echo"<td><input type='text' name='category' value='$row[category]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Number of books:</font></td>";
    echo"<td><input type='number' name='numbooks' value='$row[numbooks]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Supplier:</font></td>";
    echo"<td><input type='text' name='supplier' value='$row[supplier]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Genres:</font></td>";
    echo"<td><input type='text' name='genres' value='$row[genres]'></td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
    echo"<td align='center'><font size =5>Photos:</font></td>"; 
	echo"<td><input type='hidden' name='oldfile' value='$row[imagename]'><input type='file' name='file'><br>$row[imagename]";
	echo"<br>Use Different File Name If You Wish To Change The Photo</td>";
echo"</tr>";
echo"<tr> <td>&nbsp;</td> </tr>";
echo"<tr>";
echo"<td align='center'>";
echo"<font size=30>";
    echo "<input type='hidden' name='name' value='$row[name]'><input type='submit' name='submit' id='submit' value='Submit' />";
    echo "<input type='reset' name= 'reset' id='reset' value='Reset' />";
echo"</font>";
echo "</td>";
echo "</tr>";
echo "</table>";
}
echo "</form>";
}
?>

</font>
 </center>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
			
    </div>
</body>
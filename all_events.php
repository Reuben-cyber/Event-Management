<?php
session_save_path('./../tmp');
session_start();
?>
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
				window.location="user1.php";
		}
</script>
<style>
body {margin: 0px;}
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
				left:760px;
				top:-55px;	
			}
			#a21{
				position: relative;
				left: 700px;
				top: -55px;
			}	
#d31{
			position:absolute;
	        background-color:black;
	        color:white;
	        width:100%;
		}			
</style>

</head>
<body>
    <div id="d1">
        <img id="i1" src="images/DES-Logo.png"> </img>
        <b> <a id="a1" style="color: white;">EventDoc </a> </b>
        <b> <a id="a21" href="user1.php" style="text-decoration: none; color: white; font-size:30pt;">Back</a><a id="a2" a href="logout.php" style='text-decoration: none; color:white; font-size: 30pt;'>Logout</a></b>
</div>
<div>
	<form action="insertreport.php" method="post" name="frm" enctype="multipart/form-data" >
	<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td align='center'><h1><font size=28>Event Report</font></h1></td>
</tr><center>
 
<table border='0' width='100%' cellpadding='0' cellspacing='0' align='center'>

<tr>
    <td align='center'><font size =5 color = 'red' >*</font><font size =5>Name:</font></td>
    <?php
	
    include("conn.php");
    $nameoptions=array();
    $nameoptions[]="<option value=''></option>";
    $sql="SELECT e_name FROM event_names ORDER BY e_name";
    $result=mysqli_query($con,$sql);
    if(!$result){die('records not found '.mysqli_errno($con));}
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $nameoptions[]="<option value='$row[e_name]'>$row[e_name]</option>";
    }
    mysqli_close($con);
    echo "<td><SELECT name='name' REQUIRED>".implode('\n',$nameoptions)."</SELECT></td>";
	
    ?>

	<td align='center'><font size =5><font size =5><font color = 'red' >*</font>Venue:</font></td>
    <td><input type='text' name='venue' REQUIRED></td>
    
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
	<td align='center'><font size =5>Heads:</font></td>
	<?php
	include("conn.php");
	$headsoptions=array();
	$headsoptions[]="<option value=''></option>";
	$abc="SELECT DISTINCT sname FROM master_organiser ORDER BY sname";
    $result=mysqli_query($con,$abc);
    if(!$result){die('error..');}
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $headsoptions[]="<option value='$row[sname]'>$row[sname]</option>";
	}
    echo "<td><select name='heads'>".implode('\n',$headsoptions)."</select></td>";
?>
	<td align='center'><font size =5>Theme:</font></td>
    <td><input type='text' name='theme'></td>
    
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5><font size =5><font color = 'red' >*</font>Start Date:</font></td>
    <td><input type='Date' name='sdate' REQUIRED></td>
	<td align='center'><font size =5><font size =5><font color = 'red' >*</font>End Date:</font></td>
    <td><input type='Date' name='edate' REQUIRED></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
	<td align='center'><font size =5>Genres:</font></td>
    <td><input type='text' name='genres'></td>
    <td align='center'><font size =5>Budget: ₹</font></td>
    <td><input type='number' name='budget' value='0'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
   <tr> 
    <td align='center'><font size =5>Number of Events:</font></td>
    <td><input type='number' name='numevents' value='0'></td>

    <td align="center"><font size =5>Events</font> </td>
    <td>
        <textarea name="events" cols="45" rows="10"></textarea>
    </td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Number of Participants:</font></td>
    <td><input type='number' name='numparticipants' value='0'></td>

    <td align='center'><font size =5>Footfall:</font></td>
    <td><input type='number' name='footfall' value='0'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Winners:</font></td>
    <td><input type='text' name='winners'></td>

    <td align='center'><font size =5>Topic:</font></td>
    <td><input type='text' name='topic'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Speakers:</font></td>
    <td><input type='text' name='speakers'></td>

    <td align='center'><font size =5>Number of Delegates:</font></td>
    <td><input type='number' name='numdelegates' value='0'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Number of Teams:</font></td>
    <td><input type='number' name='numteams' value='0'></td>

    <td align='center'><font size =5>Chief Guests:</font></td>
    <td><input type='text' name='chiefguests'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Service:</font></td>
    <td><input type='text' name='service'></td>

    <td align='center'><font size =5>Team Leaders:</font></td>
    <td><input type='text' name='teamleaders'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Service provided to:</font></td>
    <td><input type='text' name='ser_provided_to'></td>

    <td align='center'><font size =5>Comm.Officer:</font></td>
    <td><input type='text' name='commofficer'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Number of Tickets sold:</font></td>
    <td><input type='number' name='numsold' value='0'></td>

    <td align='center'><font size =5>Category:</font></td>
    <td><input type='text' name='category'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Number of books:</font></td>
    <td><input type='number' name='numbooks' value='0'></td>

    <td align='center'><font size =5>Supplier:</font></td>
    <td><input type='text' name='supplier'></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
    <td align="center"><font size =5><font size =5><font color = 'red' >*</font>Comments</font> </td>
    <td>
        <textarea name="comments" cols="45" rows="10"  REQUIRED></textarea>
    </td>

    <td align='center'><font size =5>Photos:</font></td> 
	<td><input type="file" name="file" value=""/><br><br><font size=2><i>MAX FILE SIZE SHOULD BE 2 MB</i></font></td>
</tr>
<tr> <td colspan='4'>&nbsp;</td> </tr>
<tr>
<td colspan='2' align='center'>

    <input type="submit" name="submit" id="submit" value="Submit" style="font-size: 30;"/>

</td>
<td colspan='2' align='center'>

    <input type="reset" id="reset" value="Reset" style="font-size: 30;" />

</td>
</tr>
</font>
</td>
</tr>

</table>
</form>
		
	</div>
	
</div>
<div id="d31">
        <p align="center">Copyright &copy; 2019 BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved. Site Designed & Developed by BCA Students 2019</p>
	</div>

</body>
</html>

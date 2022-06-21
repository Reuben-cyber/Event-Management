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
                top:0px;
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

<body>
	<div id="d1">
	<img id="i1" src="DES-Logo.png"> </img>
<b> <a id="a1">EventDoc </a> </b>
<b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
<b><input type="button" id="b1" value="Back" onclick="m2()"style='text-decoration:none;color:white;'/></b>
	</div>
	
	<div id="d2">
	<form action="#" method="post" name="frm" enctype="multipart/form-data" >
	<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td align='center'><h1><font size=28>Temporary Events</font></h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Description:</font></td>
    <td><input type='text' name='descp'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Type</font></td>
    <td><input type='text' name='type'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Name of the Event:</font></td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Speaker</font></td>
    <td><input type='text' name='speaker'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Heads:</font></td>
    <td><input type='text' name='heads'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Start Date:</font></td>
    <td><input type='date' name='sdate'></td>
</tr>
<tr> <td>&nbsp;</td> </tr><tr>
    <td align='center'><font size =20>End Date:</font></td>
    <td><input type='date' name='edate'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =20>Photos:</font></td> 
	<td><input type="file" value=""/></td>
</tr>

<tr> <td>&nbsp;</td> </tr><tr>
<td align='center'>
<font size=19>
<input type="submit" value="submit" onclick="m()"/>
<input type="button" value="edit"/>
			<input type="button" value="cancel"/>
			</font>
			</td>
</table>
</form>
		
	</div>
	
	<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div>
</body>
</html>
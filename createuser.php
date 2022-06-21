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
body {margin: 0px; }
#div1{
				
				position:relative;
				height:25%;
				width:100%;
				top:0px;
				right:0px;
				left:0px;
				background-image:linear-gradient(to bottom right,indigo,#9213C7);
			}
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

#i1{
				position:relative;
				height:95%;
				width:12.5%;
				top:8px;
				left:-250px;
			}
#a1{
position:relative;
				left:240px;
				top:-55px;
				font-size:60px;
				font-family:Arial;
				color: white;
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
				position:relative;
				left:700px;
				top:-55px;	
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
#d31{
			position:absolute;
	        background-color:black;
	        color:white;
	        width:100%;
	        bottom:0px;
		}			
		#reset, #submit {
			font-size: 20pt;
			padding: 10px 22px;
		}
</style>

</head>
<body style="background-color:white;">
    <div id="div1">
			<b><a id="a1">EventDoc</a></b>
			<img id="i1" src="images/DES-Logo.png"></img>	
			<b><a id="a21" href="adminpg.php" style="text-decoration: none; color:white; font-size:30pt">Back</a></b>
			<b><a id="a2" href="logout.php" style="text-decoration: none; color:white; font-size:30pt">Logout</a></b>
	</div>
	<div id="d2">
	<form action="insertuser.php" method="post" name="frm" >
<table border='0' width='1000px' cellpadding='2' cellspacing='0' align='center'>
<tr><td colspan="2" align='center'><h1><font size=28>Create New User</font></h1></td></tr>
<tr>
    <td width="50%" valign="top" align='right'><font size =5>Enter User Name:</font></td>
    <td width="50%"><input type='text' name='username' REQUIRED><br><small><i>You are expected to enter a new login id.<i></small></td>
</tr>
<tr> <td colspan="2">&nbsp;</td> </tr>
<tr>
    <td align='right' valign="top"><font size =5>Enter Name of Person:</font></td>
    <td><input type='text' name='name' REQUIRED><br><small><i>Name of the person is required as the data is searched by the name of the person</i></small></td>
</tr>
<tr> <td colspan="2">&nbsp;</td> </tr>
<tr>
    <td align='right' valign="top"><font size =5>Enter Type of User:</font></td>
    <td><select name="utype" REQUIRED><option value="ADMIN">ADMIN</option><option value="USER">USER</option></select><small><i> Type USER is a general type of user who can create reports and manage them</i></small></td>
</tr>
<tr> <td colspan="2">&nbsp;</td> </tr>
<tr>
    <td align='right' valign="top"><font size =5>Enter Password:</font></td>
    <td><input type='Password' name='password' REQUIRED><br><small><i>Password has to be minimum 8 characters.It should contain first character in CAPITAL and last 5 characters should be @1234</i></small></td>
</tr>
<tr> <td colspan="2">&nbsp;</td> </tr>
<tr> <td colspan="2">&nbsp;</td> </tr
<tr>
<td colspan="2" align='center'>

    <input type="submit" name="submit" id="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" id="reset" value="Reset" />

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

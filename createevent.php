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
				left:850px;
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
</style>

</head>
<body>
    <div id="d1">
        <img id="i1" src="images/DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
        <b><a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a></b>
		<b><input type="button" id="back" value="Back" onclick="m2()"style='text-decoration:none;color:white;'/></b>
</div>
	<div id="d2">
	<form action="createdevent.php" method="post" name="frm" >
	<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td align='center'><h1><font size=28>Create New Event</font></h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'><font size =5>Enter Event Name:</font></td>
    <td><input type='text' name='e_name' REQUIRED></td>
</tr>
<tr> <td colspan="2">&nbsp;</td> </tr>
<tr>
    <td align='center'><font size =5>Enter Type Of Event:</font></td>
    <td><select name="e_type" REQUIRED><option value="A">ANNUAL EVENT</option><option value="T">TEMPORARY EVENT</option></td>
</tr>
<tr>
	<td align='center'><font size=5>Select the Fields of Information to be Captured:</font></td>
	<td><input type="checkbox" name="table_cols">abcd</td>
</tr>
<tr>
<td align='center'>
<font size=30>
    <input type="submit" name="submit" id="submit" value="Submit" />
    <input type="reset" id="reset" value="Reset" />
</font>
</td>
</tr>
</table>
</form>
		
	</div>
	
</div>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div>

</body>
</html>

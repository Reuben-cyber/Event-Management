<?php if(!isset($_SESSION)){ session_save_path('./../tmp'); session_start();} ?>
<html>
<head>
<title>BMCC - EventDoc</title>
	<style>
	body {margin:0px;}
		#div1{
				
				position:relative;
				height:25%;
				width:100%;
				top:0px;
				right:0px;
				left:0px;
				background-image:linear-gradient(to bottom right,indigo,#9213C7);
			}
		#div3{
				border:none;
				position:relative;
				width:100%;
				height:5%;
				top:0px;
				right:0px;
				left:0px;
				bottom:0px;
			}
			#div2{
				position:relative;
				height:70%;
				width:100%;
				top:0px;
				right:0px;
				left:0px;
				background-color:white;
				
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
			
			#d1{
				position:absolute;
				top:100px;
				left:15px;
				height:20%;
				width:32%;
				border:1px solid black;
			}
			#d2{
				position:absolute;
				top:100px;
				left:515px;
				height:20%;
				width:32%;
				border:1px solid black;
			}
			#d21{
				position:absolute;
				top:100px;
				right:15px;
				height:20%;
				width:32%;
				border:1px solid black;
			}
			#d3{
				position:absolute;
				top:210px;
				left:15px;
				height:20%;
				width:32%;
				border:1px solid black;
			}
			#d4{
				position:absolute;
				top:210px;
				left:515px;
				height:20%;
				width:32%;
				border:1px solid black;
				
			}
			#d41{
				position:absolute;
				top:210px;
				right:15px;
				height:20%;
				width:32%;
				border:1px solid black;
				
			}
			#d5{
				position:absolute;
				top:320px;
				left:15px;
				height:20%;
				width:32%;
				border:1px solid black;
			}
			#d6{
				position:absolute;
				top:320px;
				left:515px;
				height:20%;
				width:32%;
				border:1px solid black;
			}
			
			
			.p1{
				position:relative;
				font-size:30px;
				text-align:center;
				color:black;
			}
			#d1:hover{
				background-color:red;
			}
			#d2:hover{
				background-color:blue;
			}
			#d21:hover{
				background-color:lightgray;
			}
			#d3:hover{
				background-color:green;
			}
			#d4:hover{
				background-color:yellow;
			}
			#d41:hover{
				background-color:lightblue;
			}
			#d5:hover{
				background-color:orange;
			}
			#d6:hover{
				background-color:magenta;
			}
			#b1{
					position:relative;
					float:right;
					font-size:25px;
					right:230px;
					top:40px;
					text-decoration:none;
					color:black;
					background:none;
					padding:0px;
					border:none;
					font-family:berlin sans fb;
					display:none;
			}
			#i1{
				position:relative;
				height:95%;
				width:12.5%;
				top:8px;
				left:-250px;
			}
			#i2{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i3{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i4{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i5{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i6{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i7{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i8{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#i9{
				position:absolute;
				height:85%;
				width:15%;
				top:5px;
				left:10px;
			}
			#a1{
				position:relative;
				left:240px;
				top:-55px;
				font-size:60px;
				font-family:Arial;
				color: white;
			}
			#p{
				font-size:16pt;
			}
			
			#a2{
				position:relative;
				left:460px;
				top:-55px;	
			}
			#a21{
				position: relative;
				left: 400px;
				top: -55px;
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

			function m2()
		{
				window.location="login1.php";
		}
		#d31{
			position:absolute;
	        background-color:black;
	        color:white;
	        width:100%;
	        bottom:0px;
		}
		.footer {
  position: fixed;
  
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body style="background-color:white;">	
	<div id="div1">
			<b><a id="a1">EventDoc</a></b>
			<img id="i1" src="images/DES-Logo.png"></img>
			<!---<b><span style="position: relative; right: -750px; top: -120px; color: white;"><?php echo "Hello, ".$_SESSION["myname"];?></span><a id="a21" href="changepwd.php" style="text-decoration: none; color: white; font-size:30pt;">Change Password</a><a id="a2" href="logout.php" style="text-decoration: none; color:white; font-size:30pt">Logout</a></b>--->
		<div class="dropdown" style="position: relative; right: -750px; top: -120px;">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo "Hello, ".$_SESSION["myname"];?>
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="#">Change Password</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</div>
	</div>
	<div id="div2">
	<p id="p" align="justify" style="margin-left: 15px; margin-right: 15px; margin-top: 5px; margin-bottom: 5px;"><i>A website sleekly designed for interactive usage and easy to navigate through all the event details under one roof. It leverages the past and the current input data to provide rational reports at the output which essentially helps making better decisions regarding each sub-event which in-effect is deemed to attract additional participents. At the same tuime, they are helpful to provide transperancy and credibility.</i></p>
		<a href="createuser.php">
		<div id="d1">
			<img id="i2" src="images/add-user.png"></img>
			<p class="p1">Create New User</p>	
		</div>
		</a>
		
		<a href="createevent.php">
		<div id="d2">
			<img id="i6" src="images/createevent.png"></img>
			<p class="p1">Create New Event</p>
		</div>
		</a>
		
		<a href="resetpwd.php">
		<div id="d21">
			<img id="i8" src="images/add-user.png"></img>
			<p class="p1">Reset User Password</p>	
		</div>
		</a>
		
		<a href="whatupdateuser.php">
		<div id="d3">
		<img id="i4" src="images/update_user.png"></img>
		<p class="p1">Edit User</p>
		</div>
		</a>
		
		<a href="selecttemp.php">
		<div id="d4">
		<img id="i5" src="images/temp_to_annual.png"></img>
		<p class="p1">Edit Event</p>
		</div>
		</a>
		
		<a href="misreports.php">
		<div id="d41">
		<img id="i9" src="images/temp_to_annual.png"></img>
		<p class="p1">MIS Reports</p>
		</div>
		</a>
		
		<a href="deleteuser.php">
		<div id="d5">
			<img id="i3" src="images/remove-user.png"></img>
			<p class="p1">Delete User</p>
		</div>
		</a>
		
		<a href="deleteevent.php">
		<div id="d6">
		<img id="i7" src="images/deleteevent.png"></img>
		<p class="p1">Delete Event</p>
		</div>
		</a>
		
	</div>
	<!---<div id="d31">
        <p align="center">Copyright &copy; 2019 BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved. Site Designed & Developed by BCA Students 2019</p>
	</div>--->
	<div class="footer">
		<p>Copyright &copy; 2019 BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved. Site Designed & Developed by BCA Students 2019</p>
	</div>
	
</body>
</html>
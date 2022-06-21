<html>
<head>
<title>BMCC - EventDoc</title>
	<style>
	body {margin: 0px;}
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
				top:150px;
				left:15px;
				height:20%;
				width:48.5%;
				border:1px solid black;
			}
			#d2{
				position:absolute;
				top:150px;
				right:15px;
				height:20%;
				width:48.5%;
				border:1px solid black;
			}
			#d3{
				position:absolute;
				bottom:95px;
				left:15px;
				height:20%;
				width:48.5%;
				border:1px solid black;
			}
			#d4{
				position:absolute;
				bottom:95px;
				right:15px;
				height:20%;
				width:48.5%;
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
			#d3:hover{
				background-color:green;
			}
			#d4:hover{
				background-color:yellow;
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
				width:10.5%;
				top:5px;
				left:10px;
			}
			#i3{
				position:absolute;
				height:85%;
				width:10.5%;
				top:5px;
				left:10px;
			}
			#i4{
				position:absolute;
				height:85%;
				width:10.5%;
				top:5px;
				left:10px;
			}
			#i5{
				position:absolute;
				height:85%;
				width:10.5%;
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
				font-size:25px;
				margin-left: 15px;
				margin-right: 15px;
			}
			#a2{
				position:relative;
				left:760px;
				top:-55px;	
			}
			function m2()
		{
				window.location="login1.php";
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

			#d31{
			position:absolute;
	        background-color:black;
	        color:white;
	        width:100%;
	        bottom:0px;
		}
	</style>
	<script>
	</script>
</head>
<body style="background-color:white;">	
	
	
	
	
	<div id="div1">
			<b><a id="a1">EventDoc</a></b>
			<img id="i1" src="images/DES-Logo.png"></img>
			<b><a id="a2" a href="logout.php" style='text-decoration: none; color:white; font-size: 32pt;'>Logout</a></b>
			<b><input type="button" id="b1" value="Back" onclick="m2()"style='text-decoration:none;color:white;'/></b>
	</div>
	<div id="div2">
	<p id="p" align="justify"><i>A website sleekly designed for interactive usage and easy to navigate through all the event details under one roof. It leverages the past and the current input data to provide rational reports at the output which essentially helps making better decisions regarding each sub-event which in-effect is deemed to attract additional participants. At the same time, they are helpful to provide transperancy and credibility.</i></p>
		<a href="all_events.php"">
		<div id="d1">
			<img id="i2" src="event.png"></img>
			<p class="p1" style='text-decoration:none;'>Create Event Report</p>
		</div>
		</a>
		<a href="updateevent.php">
		<div id="d2">
			<img id="i3" src="up.png"></img>
			<p class="p1" style='text-decoration:none;'>Update Event Report</p>
		</div>
		</a>
		<a href="gallery.php">
		<div id="d3">
		<img id="i4" src="gallery.png"></img>
		<p class="p1" style='text-decoration:none;'>Photo Gallery</p>
		</div>
		</a>
		<a href="reports.php">
		<div id="d4">
		<img id="i5" src="report.png"></img>
		<p class="p1"style='text-decoration:none;'>View / Print Reports</p>
		</div>
		</a>
	</div>
	<div id="d31">
        <p align="center">Copyright &copy; 2019 BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved. Site Designed & Developed by BCA Students 2019</p>
	</div>
	
</body>
</html>
<html>
<head>
	<title>Brihan Maharashtra College of Commerce Event Doc</title>
	<style>
		#d1{
			position:absolute;
			height:98%;
			width:70%;
			background-image: url('purple.jpg')
		}
		#d2{
			position:absolute;
			left:70%;
			height:98%;
			width:30%;
			background-color:white;
		}
		#p1{
			position:relative;
			top:75px;
			left:45px;
			font-size:35;
			color:white;
			font-family:Arial black;
     		}
     	#pic2{
     		position:relative;
     		height:50%;
     		width:32%;
     		left:20px;
     		top:115px;
     	}	
     	#loginform1{
     		position:relative;
     		font-family:Arial black;
     		font-size:30;
     		top:150px;
     		left:20px;
     	}
     	#l1{
     		position:relative;
            left:26%;
            color:purple;
            font-size:45;
     	}
     	#Login{
     		position:relative;
     		left:150px;
     		color:purple;
     		height:5%;
     		width:16%;
     		font-size:24;
     	    border-radius: 12px;
        }
        #login{
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        }

       #login:hover {
	       background-color: #9213C7; /* Green */
	       color: white;
		}
		#d3{
	        position:absolute;
	        background-color:black;
	        color:white;
	        width:100%;
	        bottom:0px;
        }
     	</style>
</head>
<body style="background-color: black ">
<div id="d1">
    <img id="pic2" src="DES-Logo.png">
    </img>
    <b><p id="p1"> Welcome to EventDoc</p> </b>
</div>
<div id="d2">
    <b> 
					<form name="loginform" id="loginform1" action="check.php" method="POST">
					<br>
					<br>
					<label for="login" fontsize="35" id="l1">LOGIN</label>
					<br>
					<br>
					<label for="usrname" fontsize="25">Username</label>
					<br>
		    		<input type="text" id="usrname" class="textbox" name="usrname" style="width: 250px " required>
    				<br><br>
    				<label for="psw" fontsize="25">Password</label>
    				<br>
  					<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" style="width: 250px "required>
  					<br><br>
  					<input type="submit"  name="submit" class="btn btn-outline-primary btn-lg" value="Login" id="Login">
				</form>
    </b>
		<script>
		$(document).ready(function(e))
		{
			var username=$("#username").val();
			var password=$("#password").val();
			$("#login").click(function()
			{
				if(username=="" && password=="")
				{
					alert("username or password is blank");
					e.preventDefault();//prevent the form from submitting.
				}
			})
		})
		</script>
</div>
 <div id="d3">
        <center>Copyright&copy; 2019 BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center>
 </div>
</body>
</html>
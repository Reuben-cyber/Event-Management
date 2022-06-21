<html>
<head>
<link rel="stylesheet" href="w3.css">
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
.text {
  color: #000000;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
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
.mySlides {display: none;}			

</style>

<body>
<div id="d1">
        <img id="i1" src="DES-Logo.png"> </img>
        <b> <a id="a1">EventDoc </a> </b>
        <b> <a id="a2" a href="logout.php" style='text-decoration: none; color:white;'><font size=24>Logout</font></a </b>
		<b><input type="button" id="back" value="Back" onclick="m2()" style='text-decoration:none;color:white;'/></b>
</div>
<!-- Full-width images with number and caption text -->
  <div class="w3-content w3-display-content">
<?php
$id=$_GET["id"];
include("conn.php");
$abc="SELECT name,imagename,YEAR(sdate) AS yr FROM all_events WHERE name='$id'";
$result=mysqli_query($con,$abc);
if(!$result){
die('dead');
}
//echo"<br><img src='static.jpg' height='600px' width='600px'><br>";
//$t=array();
$cap=array();
$i=0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$t=$row["imagename"];
	$cap[$i]=$row['yr'];
	//echo "<h2 class='w3-center'>$cap</h2>";
	// echo "<div class='text'><caption align='bottom'>$cap</caption></div>";
	 echo "<img src='upload/$t' class='mySlides' alt='' caption='trial' style='width:600px' 'height:300px'>";
	 echo "<div class='w3-display-bottomleft w3-container w3-padding-16 w3-black'>".$row['yr']."</div>";
	 $i++;
 } 
   
?>
<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
	</div>
<script>
function m2()
		{
				window.location="user1.php";
		}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<div id="div3" style="background-color:black;">
            <pre id="copy"><center>&copy BRIHAN MAHARASHTRA COLLEGE OF COMMERCE. All Rights Reserved.</center></pre>
    </div> 
</body>
</html>

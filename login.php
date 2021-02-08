<!DOCTYPE html>
<html lang="en">
<head>
<?php include('session.php'); ?>
<?php
// define variables and set to empty values
include('verify.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.html");
}

?>
<link rel="icon" type="image/ico" href="icon.png">
<link rel="stylesheet" type="text/css" href="topbar.css">
<link rel="stylesheet" type="text/css" href="slideshow.css">
<link rel="stylesheet" type="text/css" href="product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login - Legato Guitar Store</title>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: georgia;
  margin: 0;
}
.header {
  padding: 5px;
  text-align: center;
  background: #ebebe0;
  color: white;
}
.footer a{
  color: black;
  padding: 14px 20px;
  text-decoration: none;
  }
  .footer a:hover{color:green;}
  
img{
vertical-align:baseline;
float:left;
}
.header h1 {
  font-size: 40px;
  color:#823830;
}
@media screen and (max-width: 600px) {
  .header h1 {
  font-size: 22px;
 visibility:collapse;}
.header {padding:2px;}
    }

 
@media screen and (max-width:600px){
.responsive {
width:100%;
height:300px;}}

.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
 color:black;
  background-color: #ddd;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

#mySidenav a {
  position: fixed;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#facebook {
  top: 250px;
  background-color: #3b5998	;
}

#instagram {
  top: 330px;
  background-color: #E1306C;
}

#twitter{

  top: 410px;
  background-color: #31b1cc;
}

@media screen and (max-width:600px){
#mySidenav{}}


.dropbtn:hover .dropdown-content {
  display: block;
}

.dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
.dropbtn-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

@media screen and (max-width:600px){
.copyright{margin-left:0;
        margin-right:0;}
.copyright1{font-size:11px;
float:middle;}
.copyright2{visibility:hidden;}}

@media screen and (max-width:600px){
.footer{display:none;
visibility:hidden;}}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #85d113;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
@media screen and (max-width:600px){
#myBtn {
  display: none;
  position: fixed;
  bottom: 15px;
  right: 25px;
  z-index: 99;
  font-size: 14px;
  border: none;
  outline: none;
  background-color: #85d113;
  color: white;
  cursor: pointer;
  padding: 1px;
  border-radius: 4px;
}}

.badge {
  position: absolute;
  top: 40px;
  right: 12px;
  padding: 3.5px 7px;
  border-radius: 50%;
  background: red;
  color: white;
}


.container1 input[type=text],input[type=password] , select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.container1 input[type=submit] {
  background-color: #32a877;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.container1 input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.error{color:red;}

.forgot a:hover{color:black;
 text-decoration:underline;}

 #list{ 
    font-size:  15px; 
	display:none;
    margin-left: 0px; 
   }
</style>
</head>
<body>

<div class="header">
<a href="index.html"><img align="left" width="200" height="100" src="logo4.png"/></a><?php echo $cartgo;?><img width="45px" height="50px" style="float:right;margin-top:40px;margin-right:10px;"  src="cart1.png"/></a>
    <span class="dropbtn" style="float:right;">&nbsp;<a href="lasun" onmouseover="account()" onclick="showaccount()"><img width="45px" height="45px" style="float:right;margin-top:40px;margin-right:30px"  src="account1.png"/></a>
    <div class="dropdown-content" value="1">
      <span class="error" style="color:maroon;font-size:18px;"><?php echo $user;?></span><span><button style="padding:0;font-size:18px;"><?php echo $sig;?></button></span>
      <a href="ordertracker.html">Order Tracker</a>
	  <?php echo $log; ?>
   </div></span>

   
<h1 style="text-decoration:none;">Your Destination for Guitars</h1>

</div>
<div class="topbar" id="myTopnav">
<a href="index.html">Home</a>
<div class="dropdown">
    <button class="dropbtn">&nbsp;Guitars
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="acousticguitar.html">Acoustic Guitars</a>
      <a href="semiacousticguitar.html">Semi-Acoustic Guitars</a>
      <a href="electricguitar.html">Electric Guitars</a>
	  <a href="bassguitar.html">Bass Guitars</a>
	  <a href="amplifiers.html">Amplifiers</a>
    </div>
  </div>
<a href="login.php">Login</a>
<a href="contactus.html">Contact Us</a>
<a href="feedback.php">Feedback</a>
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
<div class="search-container" style="margin-top:13px;">
    <div class="dropdown">
      <input id="searchbar" type="text" oninput="myFunctiono()" onkeyup="search_animal()" oninput="search_animal()" placeholder="Search.." name="search" >
	  <button class="search"  type="image" src="search.png" style="font-size:17px;padding:1px 5px;"><i class="fa fa-search"></i></button>
  
    <div class="dropdown-content">

    <ol id="list" style="list-style-type:none;float:left;" > 
        <li class="animals"><a href="acousticguitar.html">Acoustic Guitars</a></li> 
        <li class="animals"> <a href="electric4.html" onclick="window.open('bass6.html');" target="_blank">Schecter</a></li> 
        <li class="animals"><a href="acoustic6.html" onclick="window.open('semiacoustic3.html');window.open('electric1.html');window.open('bass1.html');window.open('amp1.html');" target="_blank">Fender</a></li> 
        <li class="animals"><a href="electricguitar.html">Electric Guitars</a></li> 
        <li class="animals"><a href="acoustic7.html" onclick="window.open('semiacoustic6.html');window.open('electric5.html');" target="_blank">Epiphone</a></a></a></li> 
        <li class="animals"><a href="bassguitar.html">Bass Guitars</a></li> 
        <li class="animals"><a href="acoustic3.html" onclick="window.open('semiacoustic1.html');window.open('electric3.html');" target="_blank">Gibson</a></li> 
        <li class="animals"><a href="acoustic4.html" onclick="window.open('semiacoustic2.html');window.open('electric6.html');window.open('bass2.html');" target="_blank">Ibanez</a></li> 
        <li class="animals"><a href="amplifiers.html">Amplifiers</a></li>
        <li class="animals"><a href="semiacousticguitar.html">Semi-Acoustic Guitars</a></li> 
        <li class="animals"><a href="acoustic2.html" onclick="window.open('electric9.html');window.open('bass4.html');" target="_blank">Yamaha</a></li> 
    </ol> 
        </div></div>   </div>
</div> 
		<script>
    	function myFunctiono() {
  document.getElementById("list").classList.toggle("show");
 
  }
	function search_animal() { 
	var xy=document.getElementById('list');
	xy.style.display="block";
   
    let input = document.getElementById('searchbar').value 
    input=input.toLowerCase(); 
    let x = document.getElementsByClassName('animals'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none";			
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
} </script>
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topbar") {
    x.className += " responsive";
  } else {
    x.className = "topbar";
  }
}
</script>
<div id="mySidenav" class="sidenav">
  <a href="https://www.facebook.com/" id="facebook"><img width="35px" height="35px" src="facebook.png"/></a>
  <a href="https://www.instagram.com/" id="instagram"><img width="35px" height="35px" src="instagram.png"/></a>
  <a href="https://www.twitter.com/" id="twitter"><img width="35px" height="35px" src="twitter.png"/></a>
  </div>
  
  
<div class="container1" style="margin-top:40px;margin-left:65px;margin-right:65px;">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <span style="font-size:50px;"><center>LOGIN</center></span>
   

    <label for="email">E-mail</label>&nbsp; &nbsp; <span class="error">* <?php echo $emailErr;?></span>
    <input type="text" name="email" placeholder="Your email..">
	
 <label for="password">Password</label> &nbsp; &nbsp;<span class="error">* <?php echo $passwordErr;?></span>
    <input type="password" name="password" placeholder="Your password..">
	

	
   

    <center><input type="submit" value="Login"></center>
  </form>
  <br><br><br>
  <span class="forgot" style="float:right;font-size:16px;"><a href="forgot.php" style="text-decoration:none;">Forgot Password?</a></span>
  
<big><b>New Customer?</b></big> <button style="padding:10px;"><a href="signup.php" style="color:red;text-decoration:none;font-size:20px;"><b>Sign Up</b></a></button>
</div>
<br><br><br>

<div class="footer" style="background-color:#e1e5e6;font-size:18px;padding: 2px 4px;">
<div class="ele" style="display:inline-block;padding:2px;margin-left:50px;"><br><br>
<ul style="list-style:none;">
<li><a href="index.html">Home</a></li><br><br>
<li><a href="contactus.html">Contact Us</a></li><br><br>
<li><a href="feedback.php">Feedback</a></li><br><br></ul></div>
<div class="ele" style="display:inline-block;padding:5px;margin-left:50px;">
<ul style="list-style-type:none;">
<li><a href="acousticguitar.html">Acoustic Guitars</a></li><br><br>
<li><a href="semiacousticguitar.html">Semi-Acoustic Guitars</a></li><br><br>
<li><a href="electricguitar.html">Electric Guitars</a></li><br><br>
</div>
<div class="ele" style="display:inline-block;padding:5px;margin-left:50px;">
<ul style="list-style-type:none;">
<li><a href="bassguitar.html">Bass Guitars</a></li><br><br>
<li><a href="amplifiers.html">Amplifiers</a></li><br><br><br><br><br>
</ul>
</div>
<div class="ele" style="display:inline-block;padding:5px;margin-left:50px;font-family:arial;">
<ul style="list-style-type:none;">
<li><b>Legato Guitar Store</b></li><br>
<li>#69, Ground Floor,</li>
<li>4th Main, 20th Cross,</li>
<li>Babunath Road,</li>
<li>H.S.R Layout,</li>
<li>Bangalore - 560069</li><br><br></ul>
</div>
<div class="ele" style="display:inline-block;padding:5px;margin-left:50px;font-family:arial;"> 
<ul style="list-style:none;"> 
<li><b>Follow Us On:<b></li><br>
<li><a href="https://www.facebook.com/" ><img width="35px" height="35px" src="facebook.png"/ style="margin-right:10px;"></a>
  &nbsp &nbsp <a href="https://www.instagram.com/"><img width="37px" height="38px" src="instagram.png"/ style="margin-right:10px;"></a> 
  &nbsp &nbsp <a href="https://www.twitter.com/"><img width="35px" height="35px" src="twitter.png"/ style="margin-right:10px;"></a></li><br><br><br>
<li><a href ="mailto:legatoguitar@gmail.com?subject = Feedback&body = Message" target="_top">Email:legatoguitar@gmail.com</a></li><br><br></ul>
</div>
</div>
<div  class="copyright" style="font-size:14px;color:white;background-color:black;padding:10px;bottom:0;left:0;width:100%;">
<div class="copyright1" style="margin:10px;margin-left:120px;margin-right:120px;">
<center>Copyright © Legato Guitar Store, Inc.  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  All Rights Reserved. &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span class="copyright2">LegatoGuitarStore.com</span> </center> 
</div></div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><center><img width="35px" height="35px" src="top.png"/ style="margin-right:10px;"/></center><br>Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>

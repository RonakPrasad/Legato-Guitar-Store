<?php 
 $user="";
 $signup="";
 $sig="";
 $logout="";
 $log="";
 $cart="";
session_start();
if(isset($_SESSION['login_user'])&&($_SESSION['useremail'])){
$cart="mycart.html";
$cartgo="<a href='$cart'>";
	$user="Hello, ".$_SESSION['login_user'];
	$sig="";
	$logout="logout.php";
	$log="<a href='".$logout."'>Logout</a>";
}
else{
$cart="login.php";
$cartgo="<a href='$cart'>";
$signup="signup.php";
$user="New Customer?"."<br>";
$sig="<a href='".$signup."'>Sign Up</a>";
$cart="<a hreflogin.php";
}	
?>
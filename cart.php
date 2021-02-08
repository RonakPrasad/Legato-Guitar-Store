<?php
include('session.php');
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";
$db1="legatoguitarproducts";

$email=$_SESSION['useremail'];
// Create connection

if(isset($_SESSION['login_user'])&&($_SESSION['useremail'])){
$conn = mysqli_connect($servername, $username, $mypassword, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT pno,price,pname FROM usercart where email='$email'";
$result = mysqli_query($conn, $sql);
$result1=mysqli_query($conn, $sql);
$conn->close();


}
?>
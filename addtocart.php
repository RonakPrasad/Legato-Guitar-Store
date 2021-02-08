<?php
include('verify.php');
$pno=$price=$pname="";
$respond="Product added to cart";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pno=$_POST["pno"];
	$price=$_POST["price"];
	$pname=$_POST["pname"];

session_start();
if(isset($_SESSION['login_user'])&&($_SESSION['useremail']))
{
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";

$email1=$_SESSION['useremail'];
// Create connection


$conn = mysqli_connect($servername, $username, $mypassword, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO usercart (email, pno, pname, price)
VALUES ('$email1', '$pno', '$pname', '$price')";

if (mysqli_query($conn, $sql)) {
	
    echo "New record created successfully";
	header("location:javascript://history.go(-1)");
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
}
else 
	header("location:login.php");
}

?>
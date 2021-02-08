<?php
include('cart.php');
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";
$conn = mysqli_connect($servername, $username, $mypassword, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE  FROM usercart where email='$email'";
$result = mysqli_query($conn, $sql);

$conn->close();

header("location:mycart.html");
?>
<?php
include('cart.php');
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$pno=$_POST['remove'];

$conn = mysqli_connect($servername, $username, $mypassword, $db);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE  FROM usercart where email='$email' and pno='$pno'";
if(mysqli_query($conn, $sql))
	echo "done bruh";
else
	echo "yo wtf";

$conn->close();
header("location:remove.html");
}
?>
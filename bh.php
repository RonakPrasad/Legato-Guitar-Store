<?php
$email="ro@g.com";
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";

$conn = mysqli_connect($servername, $username, $mypassword, $db);
// SQL query to fetch information of registerd users and finds user match.

$query = "select email from user where email='$email'";
$result = mysqli_query($conn, $query);
$obj=mysqli_fetch_array($result);

if($obj[0]==$email)
	echo 'cant use same email';
else

echo "lol"; 


/*if(password_verify($password,$pass))
echo 'hell yeah';
else
	echo 'lasun';*/

?>
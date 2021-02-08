<?php


$passwordErr = $emailErr = "";
$email = $password = "";
$hashed_password = "";


 // Starting Session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
	  $password=$_POST["password"];
	  $lowercase = preg_match('@[a-z]@', $password);
      $number = preg_match('@[0-9]@', $password);
      $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);
	if(!$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      $passwordErr = 'Password should be at least 8 characters in length and should include at least one number, and one special character.';
	  }
    else{
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
  




// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";

// Create connection
$conn = mysqli_connect($servername, $username, $mypassword, $db);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from user where email='$email'";
$result=mysqli_query($conn, $query);
$obj=mysqli_fetch_array($result);
$pass=$obj[3];
$user=$obj[0];
if(password_verify($password, $pass)) {
	session_start();
	$_SESSION['useremail']=$email;
$_SESSION['login_user']=$user; // Initializing Session
header("location: LegatoGuitarStore.html"); // Redirecting To Other Page
} 
else {
$passwordErr = "Email or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
	  }  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
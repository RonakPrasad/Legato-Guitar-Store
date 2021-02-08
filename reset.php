<html>
<head>
<link rel="icon" type="image/ico" href="icon.png">
<title>Reset Password - Legato Guitar Store</title>
<?php
$password=$email="";
$passwordErr=$emailErr="";
$hashed_password="";
$leg="";
$dis="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Invalid email format";
    }
  }
  
if (empty($_POST["password"])) {
    $passwordErr = "*Password is required";
  } else {
	  $password=$_POST["password"];
	  $lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password);
	  if(!$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $passwordErr = '*Password should be at least 8 characters in length and should include at least one number, and one special character.';
  }
    else{
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
  }
  }
}
if(!$emailErr && !$passwordErr)
if(password_verify($password, $hashed_password))
{
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";

// Create connection
$conn = mysqli_connect($servername, $username, $mypassword, $db);
// SQL query to fetch information of registerd users and finds user match.

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "select * from user where password='$hashed_password' AND email='$email'";
mysqli_query($conn,$query);
$query1 = "update user set password='$hashed_password' where email='$email'";
if (mysqli_query($conn, $query1)) {
	$leg="LegatoGuitarStore.html";
$dis="Successfully Reset Password!!!<br><br>Back To <a href=$leg>Legato Guitar Store</a>";
}
	else{
	$dis= "Error";
mysqli_close($conn);
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</head>
<body>
<center>
<h1 style="color:green;text-decoration:underline;">Reset Your Password for your Account:</h1><br>
<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<span style="font-size:25px;">
<div>
Enter your email:<input type="text" name="email"><br><span style="color:red;font-size:15px;"><?php echo $emailErr; ?></span><br><br>
Enter your new password:<input type="password" name="password"><br><span style="color:red;font-size:15px;"><?php echo $passwordErr; ?></span><br><br><br>
<button type="submit" style="font-size:30px;">Submit</button>
</div></center>
</form>
<center><span style="font-size:20px;"><?php echo $dis ;?></span></center>
</body>
</html>

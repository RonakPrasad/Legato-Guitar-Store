<html>
<head>
<link rel="icon" type="image/ico" href="icon.png">
<title>Forgot Password - Legato Guitar Store</title>
<?php
$email="";
$emailErr="";
$mess="";

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

$reset="http://localhost/dashboard/DBS%20Project/reset.php";

require_once('PHPMailer/PHPMailerAutoload.php');

$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='ronakprasad@gmail.com';
$mail->Password='ronakk2000';
$mail->FromName='Legato Guitar Store';
$mail->Body="<a href='".$reset."'>Reset Your Password</a>";
$mail->AddAddress($email);

if($mail->Send())
	$mess='Success! Check your inbox we have sent you a mail';
else
	$mess="Error! Unable to send the link";
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
<h1 style="color:maroon;">A link will be mailed to you to reset your Password</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Enter your email address:<input type="text" name="email">

<input type="submit" value="Submit"></form>
<span style="color:red;"><?php echo $emailErr; ?></span>
<br><br><span style="color:blue;font-size:20px;"><?php echo $mess; ?></span>
</body>
</html>
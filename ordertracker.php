<?php
$ordernoErr = $emailErr = "";
$orderno = $email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	 if (empty($_POST["orderno"])) {
    $ordernoErr = "Order Number is required";
  } else {$orderno=$_POST["orderno"];
    }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";


// Create connection

$conn = mysqli_connect($servername, $username, $mypassword, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM orders where email='$email' and orderno='$orderno'";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
	 
    // output data of each row 
    while($row = mysqli_fetch_assoc($result)) {
        $order=$row["orderno"];
		$pname=$row["productname"];
		$delivery=$row["deliverydate"];
		$amount=$row["amount"];
		$payment=$row["payment"];
	
		 }}	else{
		 $ordernoErr="Invalid Order No. or Email";}
		 
mysqli_close($conn);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
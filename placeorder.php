<?php
$nameErr = $emailErr = $addressErr = $phoneErr = $cityErr = $pincodeErr = $paymentErr = "";
$email = $name = $phone = $address = $city = $pincode = "";
$payment= $landmark = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	 if (empty($_POST["name"])) {
    $nameErr = "Full Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = ($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[6-9][0-9]{9}$/",$phone)) {
      $phoneErr = "Only numbers allowed";
    }
	if((strlen($_POST["phone"])>10)||(strlen($_POST["phone"])<10))
		$phoneErr = "Phone number must contain 10 digits";
  }
  
  
  
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
	  if($_POST["email"]!=$_SESSION['useremail'])
	  $emailErr = "Email ID is different from the <br> account email ID";
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  	 

  if (empty($_POST["address"])) {
    $addressErr = "Address is required, obviously";
  } else 
	  $address=$_POST["address"];
  
$landmark=$_POST["landmark"];
  
  if (empty($_POST["city"])) {
    $cityErr = "City is required";
  } else 
	  $city=$_POST["city"];
    
  if (empty($_POST["pincode"])) {
    $pincodeErr = "Pin Code is required";
  } else if((strlen($_POST["pincode"])<6)&&(strlen($_POST["pincode"])>6))
	  $pincodeErr = "Pin Code must contain 6 digits";
  
	  $pincode=$_POST["pincode"];
  
  if (empty($_POST["payment"])) {
    $paymentErr = "Select a Payment Mode";
  }else
	  $payment=$_POST["payment"];
  

if(!empty($email && $name && $phone && $address && $city && $pincode && $payment))
if(!$nameErr && !$emailErr && !$addressErr && !$phoneErr && !$cityErr && !$pincodeErr && !$paymentErr)
{
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";
$db="legatoguitar";
$db2="legatoguitarproducts";
// Create connection
$conn = mysqli_connect($servername, $username, $mypassword, $db);
// SQL query to fetch information of registerd users and finds user match.
$conn2 = mysqli_connect($servername, $username, $mypassword, $db2);

$date=date_create();
$date=date_add($date,date_interval_create_from_date_string("1 days"));
$date1=date_format($date,"Y-m-d");
$total=0;
$sql = "SELECT pno,price,pname FROM usercart where email='$email'";
$result1 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result1) > 0) {
    // output data of each row 
    while($row = mysqli_fetch_assoc($result1)) {
		$pno=$row["pno"];
		$pname=$row["pname"];
		$total=$row["price"];
			$query = "INSERT INTO orders (productno, productname, name, phone ,email, address,landmark,city,pincode,payment,amount,deliverydate)
VALUES ('$pno','$pname','$name', '$phone', '$email', '$address', '$landmark', '$city', '$pincode', '$payment','$total','$date1')";
$result=mysqli_query($conn, $query);
		
      $sql1 = "delete FROM usercart where email='$email'";
$result2 = mysqli_query($conn, $sql1);

$sql4="SELECT TABLE_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE pno = '$pno'";
$result4=mysqli_query($conn2, $sql4);

$sql3="update '$result4' set quantity=quantity-1 where P_No='$pno'";
$result5=mysqli_query($conn2, $sql3);
}}


$sql2="select orderno,productname,deliverydate,amount from orders where email='$email'";
$result3=mysqli_query($conn, $sql2);
if (mysqli_num_rows($result3) > 0) {
    // output data of each row 
    while($row1 = mysqli_fetch_assoc($result3)) {
		
   $orderno=$row1["orderno"];
	$productname=$row1["productname"];
	$deliverydate=$row1["deliverydate"];
	$amount=$row1["amount"];
	
	
require_once('PHPMailer/PHPMailerAutoload.php');

$link="http://localhost/dashboard/AWP%20Project/ordertracker.html";

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
$mail->Subject='Congrats! Order has been placed';
$mail->Body="Thank you for ordering from Legato Guitar Store.<br><br> We really appreciate your love for music.<br><br> Your order of $productname will be delivered to you by $deliverydate<br><br>  The Order No. is:$orderno <br>The total amount of the order is: ₹$amount/- <br><br>You can track your order through the following link: <a href=".$link.">Order Tracker</a>";
$mail->AddAddress($email);

if($mail->Send())
	$mess='Success! Check your inbox we have sent you a mail';
else
	$mess="Error! Unable to send the link";

}}

header("location:orderplaced.html");
mysqli_close($conn); // Closing Connection
mysqli_close($conn2);




}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

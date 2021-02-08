<?php 

$user="";

if(session_id() == '') {
    $user="<a href="login.php">New Customer?<br><button style="font-size:20px;color:maroon;">Sign In</button></a>";
}
else{
$user=$_SESSION['login_user'];
}
?>
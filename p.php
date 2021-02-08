<?php
$servername = "localhost";
$username = "ronakprasad";
$mypassword = "legatoguitar";

$db="legatoguitarproducts";

$conn = mysqli_connect($servername, $username, $mypassword, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM acousticguitars where pno='1'";
$result = mysqli_query($conn, $sql);
while($rows = mysqli_fetch_assoc($result))
        {
            $img = $rows['pno'];
		}
echo $img;
?>

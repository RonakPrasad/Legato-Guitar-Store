
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: LegatoGuitarStore.html"); // Redirecting To Home Page
}
?>
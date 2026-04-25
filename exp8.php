<?php 

session_start();

$_SESSION["user"] = "ABC";
echo("Session created<br>");

session_unset();   // remove variables
session_destroy(); // destroy session

echo("Session Deleted<br>");

?>
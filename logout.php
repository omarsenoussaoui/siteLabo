<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 

// Destroy the session.
session_destroy();
if ($_SERVER['HTTP_REFERER']=="http://localhost/site%20labo/page-admin.php") {
	header("location: login-admin.php");
}elseif ($_SERVER['HTTP_REFERER']=="http://localhost/site%20labo/index.php"or$_SERVER['HTTP_REFERER']=="http://localhost/site%20labo/mon-compte.php") {
	header("location: login-patient.php");

}


exit;
?>
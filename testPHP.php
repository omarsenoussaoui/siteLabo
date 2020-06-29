<?php

  session_start();



$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['mot_passe'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $email=$_POST['email'];
 $mot_passe=$_POST['mot_passe'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "labo");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE mot_passe='$mot_passe' AND email='$email'");
 
 $rows = mysqli_num_rows($query);
 if($rows >0 ){
 header("Location: page-admin.php"); 
 }
 else
 {
 $error = "Username of Password is Invalid";
  header("Location:Login-admin.php");

 
 }

 }
}








  ?>
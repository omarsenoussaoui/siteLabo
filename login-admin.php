<?php 
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['mot_passe'])){
 echo " <h1 style='color=red; '>Email  ou  Mot de passe  est Invalide </h1> ";
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
 $_SESSION['logout'] = time();
 $_SESSION['admin']=$_POST['email'];
 header("Location: page-admin.php"); 
 }
 else
 {

 $error = "Username of Password is Invalid";

 echo " <h1 style='color=red; '>Email  ou  Mot de passe  est Invalide </h1> ";

 }

 }
}
if (isset($_SESSION['admin'])) {
   header("Location:page-admin.php");
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href=css/bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Site Metas -->
   <title>Connexion</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style-principal.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/css-login/util.css">
	<link rel="stylesheet" type="text/css" href="css/css-login/main.css">
<!--===============================================================================================-->
</head>

<body >
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-0001.png" alt="IMG">
				</div>
					 
				<form class="login100-form validate-form" action="" method="POST" onsubmit="return verifForm(this)" >
					<span class="login100-form-title" style="font-size: 20px;font-family: Arial"  >
						ADMIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="E-mail ou Nom" onblur="verifMail(this)" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mot_passe" placeholder="Mot De Passe" onblur="verifPass(this)" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<input type="checkbox" name="remember"> Remember Me
					<button style="font-size: 20px;font-family: Arial" name="submit"  class="login100-form-btn">
							envoyer
						</button>
					<div class="text-center p-t-136">
						
					</div>
					
				</form>
        


			</div>
		</div>
	</div>

	</body>
	<script type="text/javascript">
		
		function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifPass(champ)
{
   
  if (champ.value.length==0) {
  	surligne(champ, true);
      return false;
  }else{
  	return true;
  }
  
}


function verifForm(f)
{
   var mailOk = verifMail(f.email);
   var passOK = verifPass(f.mot_passe);
  
   
   if(mailOk && passOK){
      return true;
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

	</script>
	
</html>
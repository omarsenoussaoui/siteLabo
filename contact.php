
<?php  
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"labo");

if (isset($_POST['envoyer'])) 
{
  $nom=$_POST['name'];
  $email=$_POST['email'];
  $sujet =$_POST['subject'];
  $message=$_POST['message'];
 
if (empty($nom) or empty($email) or empty($sujet) or empty($message)) 
{
  $erreur='remplissez tous les champs svp';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "format d'email nonvalide";
}else{
  $q="INSERT INTO `message`(`id_msg`, `nom`, `email`, `sujet`, `message`) VALUES ('','$nom','$email','$sujet','$message')";
  if (mysqli_query($conn, $q)) {

$env="votre message a été envoyé";
  }
  }
}

?>




  
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
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
	<link rel="stylesheet" type="text/css" href="css/css-contact/style-contact-1.css">
	<link rel="stylesheet" type="text/css" href="css/css-contact/style-contact-2.css">
<!--===============================================================================================-->
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->


   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
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
   <!-- [if lt IE 9] -->

</head>
<style type="text/css">
  body {
    font-family: 'Poppins';
  }
</style>
<body>
   </head>
   <body style="font-size: 20px; font-family: 'Poppins''Poppins' ">
 <header id="home">
         <div class="header-bottom wow fadeIn">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img style="height: 30px;" src="images/logo-finalle.png" alt="image"></a>
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          
                  <div id="navbar" class="navbar-collapse collapse">
                  
                     <ul class="nav navbar-nav">
                     
                        <li><a style="font-size: 20px;"  class=""  href="index.php">Accueil</a></li>
                       
                        <li><a style="font-size: 20px;" data-scroll href="nos-serv.php">Services</a></li>
                        <li><a style="font-size: 20px;" class="active"  dstyle="font-size: 20px;"ata-scroll href="contact.php" target="_blanck">Contact</a></li>
                        <li><a style="font-size: 20px;"data-scroll href="signup1.php">Rendez-Vous</a></li>
                        <li> <?php if (!isset($_SESSION['nom_patient'])) {
                          
                        ?>
                          <a onclick="myFunction()" onmouseover="myFunction()" class="dropbtn" style="font-size: 20px;font-family: "  data-scroll >Connexion </a>
              <div class="dropdown">
                
                <div  id="myDropdown" class="dropdown-content">
                  <a  href="signup2.php" target="_blanck" style="font-size: 20px;font-family: " data-scroll>Connectez </a>
                  <a data-scroll href="creez un compte.php " style="font-size: 20px;font-family: ">Inscription</a>
                </div>
              </div>
            </li> <?php 
            }else{
              echo "<li><a style='font-size: 20px;font-family: 'data-scroll href='compte_rdv.php'>Mon compte</a></li>";
              echo "<li><a style='font-size: 20px;font-family: 'data-scroll href='logout.php'>Logout</a></li>";
            }
             ?>
            
                     </ul>

                     
                  </div>

               </nav>
            
               
            </div>
         </div>
      </header>
      


	<div class="contact1">
 <?php  
 if (isset($env)) {
    
   echo '<div class="alert alert-success" role="alert">'.$env.'</div>';  
 }elseif (isset($erreur)) {
   echo '<div class="alert alert-danger" role="alert">'.$erreur.'</div>'; 
 }elseif(isset($emailErr)){
  echo '<div class="alert alert-danger" role="alert">'.$emailErr.'</div>'; ;
 }

   ?>

		<div style="font-family: 'Poppins' Poppins;" class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="post" action="" >
				<span style="font-family: 'Poppins' Poppins;" class="contact1-form-title">
					Avez-vous un problème?           </br>Contactez-nous
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="NOM">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="E-mail">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Sujet">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" name="envoyer" type="submit">
						<span style="font-size: 20px;font-family: 'Poppins' Poppins" >
							Envoyer
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>All Rights Reserved. &copy; 2020 Omar & Djilali & Mdm Ghalem</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script type="text/javascript">
      	/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


      </script>
   <style type="text/css">
                      
              .dropdown-content {
                background-color: #1a75ff;
                display: none;
                position: absolute;
                min-width: 160px;
                overflow: auto;
                z-index: 1;

              }

              .dropdown-content a {
                  
                  text-decoration: none;
                  display: block;
                  text-align: left;
              }
              .show {display: block;}
                     </style>

<?php

session_destroy();

  ?>
</body>
</html>

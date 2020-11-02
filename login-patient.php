<?php 
session_start();


$error=''; //Variable to Store error message;
if(isset($_POST['Login-patient'])){
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
 $query  = mysqli_query($conn, "SELECT * FROM patient WHERE mot_passePa='$mot_passe' AND (email='$email' OR num_tlp='$email') ");

$row = $query -> fetch_assoc();
if (isset($row)) {
	
$_SESSION['id']=$row['id_patient'];
$_SESSION['nom_patient']=$row["nom_patient"];
$_SESSION['prenom_patient']=$row["prenom_patient"];
$_SESSION['email_patient']=$row['email'];
$_SESSION['mot_passe']=$row['mot_passePa'];
$_SESSION['num_tlp']=$row['num_tlp'];

}
$rows = mysqli_num_rows($query);
 if($rows >0 ){

header("Location:index.php");

 }
 else
 {
 	
  $erro="<h1 class='alert alert-danger' role='alert'>
Email  ou  Mot de passe  est Invalide </h1> ";


 
 }

 }
}
if (isset($_SESSION['nom_patient']) ) {
	header("Location:index.php");
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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
  <header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          
                  <div id="navbar" class="navbar-collapse collapse">
                   <a class="navbar-brand" href="index.php"><img style="height: 30px;" src="images/logo-finalle.png" alt="image"></a>
                     <ul class="nav navbar-nav">
                     
                        <li><a style="font-size: 20px;font-family: Poppins"  href="index.php">Accueil</a></li>
                       
                        <li><a style="font-size: 20px;font-family: Poppins" data-scroll href="nos-serv.php">Services</a></li>
                        <li><a style="font-size: 20px;font-family: Poppins"  dstyle="font-size: 20px;font-family: Poppins"ata-scroll href="contact.php" target="_blanck">Contact</a></li>
                        <li><a style="font-size: 20px;font-family: Poppins"data-scroll href="signup1.php">Rendez-Vous</a></li>
                        <li> <?php if (!isset($_SESSION['nom_patient'])) {
                          
                        ?>
                          <a onclick="myFunction()" onmouseover="myFunction()" class="dropbtn active" style="font-size: 20px;font-family: Poppins"  data-scroll >Connexion </a>
              <div class="dropdown">
                
                <div  id="myDropdown" class="dropdown-content">
                  <a  href="signup2.php" target="_blanck" style="font-size: 20px;font-family: Poppins" data-scroll>Connectez </a>
                  <a data-scroll href="creez un compte.php " style="font-size: 20px;font-family: Poppins">Inscription</a>
                </div>
              </div>
            </li> <?php 
            }else{
              echo "<li><a style='font-size: 20px;font-family: Poppins'data-scroll href='mon-comptte.php'>Mon compte</a></li>";
              echo "<li><a style='font-size: 20px;font-family: Poppins'data-scroll href='logout.php'>Logout</a></li>";
            }
             ?>
            
                     </ul>

                     
                  </div>

               </nav>
            
               
            </div>
         </div>
      </header>
	<div class="limiter">
		<div class="container-login100">
		<?php if (isset($erro)) {
					echo $erro;
				} ?>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-0001.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="" method="post" onsubmit="return verifForm(this)">
					<span class="login100-form-title"style="font-size: 20px;font-family: Poppins"  >
						PATIENT
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="E-mail ou Numéro de telephone"
						onblur="verifMail(this)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="mot_passe" name="mot_passe" placeholder="Mot De Passe" onblur="verifPass(this)"> 
						<span  class="symbol-input100">
							<i style="margin-bottom: 20px;" class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<input style="margin-left: 20px;" type="checkbox" onclick="myFunction()">afficher le mot de passe
					</div >
					<input style="margin-left: 20px;" type="checkbox" name="remember"> Remember Me
					<div class="container-login100-form-btn">
						<button style="font-size: 20px;font-family: Poppins" name="Login-patient"  class="login100-form-btn">
							Se connecter
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="creez un compte.php" style="font-size: 20px;font-family: Poppins"  >
							Creez un Compt chez-nous
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
        


			</div>
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>
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

function myFunction() {
  var x = document.getElementById("mot_passe");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


      </script>
      	<script type="text/javascript">
		
		function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
/*function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$ /;
   var phoneno = /^\d{10}$/;

   if(!regex.test(champ.value) || !phoneno.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}*/
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
 
<!-- style de images slide -->
   <style type="text/css">
      
       #slider{
         width: 100% ;
         height: 600px;
         margin: 20px auto;
         position: relative;
         border: 10px solid white;
         box-shadow: 0px 0px 5px 2px #ccc;
       }
       /*button{
         padding: 20px;
         border: none;
         background: #37f;
         font-size: 30px;
         color: white;
         position: absolute;
         top:45%;
         cursor: pointer;
       }*/

        .next{
         border-radius: 10px 10px 10px 10px;
         margin-left: 95.5%;
        }
        .prew{
         border-radius: 10px 10px 10px 10px;
        }

   </style>
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

</body>
</html>
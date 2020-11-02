<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
   <!-- Site Metas -->
   <title>Laboratoire d'Analyses Médicales</title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body {
    background: url(images/bg.png) repeat top center #f2f3f5;
}
</style>
<body>
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
                     
                        <li><a style="font-size: 20px;"  class="active"  href="index.php">Accueil</a></li>
                       
                        <li><a style="font-size: 20px;" data-scroll href="nos-serv.php">Services</a></li>
                        <li><a style="font-size: 20px;"  dstyle="font-size: 20px;"ata-scroll href="contact.php" target="_blanck">Contact</a></li>
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
              echo "<li><a style='font-size: 20px;font-family: 'data-scroll href='mon-comptte.php'>Mon compte</a></li>";
              echo "<li><a style='font-size: 20px;font-family: 'data-scroll href='logout.php'>Logout</a></li>";
            }
             ?>
            
                     </ul>

                     
                  </div>

               </nav>
            
               
            </div>
         </div>
      </header>
	<div class="container">
		<center><img src="images/clinic_02.jpg"></center>
		<br>
		 <div class="heading">
	               <span style="padding-top: 20px;" class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
	               <h2>Laboratoire d'Analyses Médicales</h2>
	     </div>
	     <h2>Localisation :</h2>
	     <p>Le laboratoire est situé dans le Centre de la wilaya de Mascara quartier la zone8 , à proximité du stade DNC et en face Lycée Mekkioui Mamoune (Polyvalent) ; et exactement aux quartier médicale Nedroma,. Il est accessible à tous. Nous disposons d’un accès direct de la station « terminus de Bus » en prenant la route qui mène vers café "MASCARA" et d’une communication directe avec la route principale.</p>
	      <h2>Capacité d’accueil: </h2>
	     <p>Laboratoire a une capacité de 2 salles de prélèvement avec une grande salle pour faire les analyses contenant toutes les fournitures de tests, un bureau de réception et une salle d’attente.</p>
	     <h2>Effectif de laboratoire </h2>
	     <h3>Ressource humaine </h3>
	     <p>Laboratoire D'analyses Médicales Boudchiche comporte :</p>
	     <ul>
	     	<li>1 Médecin </li>
	     	<li>4 infermières. 
	     		<ul>
	     			<li>2 pour faire des prélèvements. </li>
	     			<li>2 pour aider le médecin à faire l’analyse.</li>
	     		</ul>
	     	</li>
	     	<li>1 Réceptionniste.</li>
	     </ul>
	     <h2>Equipment et Matériel </h2>
	     <ul>
	     		<li>Glucomètre</li>
				<li>Spectrophotomètre</li>
				<li>Coagulomètre</li>
				<li>Sysmex 1000</li>
				<li>RX Daytona+</li>
				<li>Yumizen h2500</li>
		</ul>
		<h2>Les spécialités du laboratoire</h2>
	     <ul>
	     		<li>Hématologie</li>
				<li>Biochimie</li>
				<li>Sérologie</li>
				<li>Hormonologie</li>
				<li>Bactériologie+</li>
				<li>Parasitologie</li>
		</ul>

	 </div>
</body>
</html>

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

jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.dmtop').css({
                bottom: "75px"
            });
        } else {
            jQuery('.dmtop').css({
                bottom: "-100px"
            });
        }
    });

      </script>
 <?php session_start(); ?>
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
   <!-- Site Metas -->
   <title>Nos Services</title>
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
  <body>

         <div class="header-bottom wow fadeIn">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img style="height: 30px;" src="images/logo-finalle.png" alt="image"></a>
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          
                  <div id="navbar" class="navbar-collapse collapse">
                  
                     <ul class="nav navbar-nav">
                     
                        <li><a style="font-size: 20px;"   href="index.php">Accueil</a></li>
                       
                        <li><a style="font-size: 20px;" class="active" data-scroll href="nos-serv.php">Services</a></li>
                        <li><a style="font-size: 20px;"  dstyle="font-size: 20px;"ata-scroll href="contact.php">Contact</a></li>
                        <li><a style="font-size: 20px;"data-scroll href="signup1.php">Rendez-Vous</a></li>
                        <li> <?php if (!isset($_SESSION['nom_patient'])) {
                          
                        ?>
                          <a onclick="myFunction()" onmouseover="myFunction()" class="dropbtn" style="font-size: 20px;font-family: "  data-scroll >Connexion </a>
              <div class="dropdown">
                
                <div  id="myDropdown" class="dropdown-contélnt">
                  <a  href="signup2.php" target="_blanck" style="font-size: 20px;font-family: " data-scroll>Connectez </a>
                  <a data-scroll href="creez un compte.php" style="font-size: 20px;font-family: ">Inscription</a>
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
     <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                           <h4>Biochimie</h4>
                           <a style="text-decoration: none; color: white; cursor: pointer;" href="https://www.cancer.ca/fr-ca/cancer-information/diagnosis-and-treatment/tests-and-procedures/blood-chemistry-tests/?region=qc#:~:text=Les%20analyses%20biochimiques%20sanguines%20sont,aussi%20de%20d%C3%A9tecter%20des%20anomalies.">Voir Plus</a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                           <h4>Hématologie</h4>
                           <a style="text-decoration: none; color: white; cursor: pointer;" href="https://www.passeportsante.net/fr/specialites-medicales/Fiche.aspx?doc=hematologie#:~:text=L'h%C3%A9matologie%20est%20la%20sp%C3%A9cialit%C3%A9,les%20principaux)%20et%20leurs%20maladies.">Voir Plus</a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <h4>Sérologie</h4>
                          <a style="text-decoration: none; color: white; cursor: pointer;" href="https://www.passeportsante.net/fr/specialites-medicales/Fiche.aspx?doc=serologie">Voir Plus</a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                           <h4>Hormonologie</h4>
                           <a style="text-decoration: none; color: white; cursor: pointer;" href="https://www.passeportsante.net/fr/Maux/analyses-medicales/Fiche.aspx?doc=analyse-tsh-sang">Voir Plus</a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                           <h4>Bactériologie</h4>
                           <a style="text-decoration: none; color: white; cursor: pointer;" href="https://www.passeportsante.net/fr/Maux/examens-medicaux-operations/Fiche.aspx?doc=examen-bacteriologique#:~:text=Un%20examen%20ou%20analyse%20bact%C3%A9riologique,bact%C3%A9riologique%20des%20selles%20(voir%20coproculture)">Voir Plus</a>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                           <h4>Parasitologie</h4>
                           <a style="text-decoration: none; color: white; cursor: pointer;" href="https://www.passeportsante.net/fr/Maux/examens-medicaux-operations/Fiche.aspx?doc=examen-parasitologique-selles#:~:text=Un%20examen%20parasitologique%20des%20selles,de%20bact%C3%A9ries%20dans%20les%20selles.">Voir Plus</a>
                        </div>
                     </div>
                     <div style="margin: 0 34%;" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/Testes.png" alt="#" /></span>
                           
                           <a style="text-decoration: none; color: white; cursor: pointer;" href="testes pdf/merged_1pdf.io.pdf"><h4>Téléchargerer cataloque</h4>
                            <!--  <embed src="images/Rapport_de_conception.pdf" />-->

                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                        <?php if (!isset($_SESSION['nom_patient'])) 
                     {
                        
                      ?>
                     <h3><span>+</span> Prendre RDV !</h3>
                     <div class="form">
                        <form  method="POST">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" name="email" placeholder="Email"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="password" name="mot_passe" placeholder="mot de passe"/>
                                    </div>
                                 </div>
                              </div>
                           
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <a href="creez un compte.php">J'ai pas de compte</a>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button name="Login-patient" type="submit">Se connecter</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                     <?php }
                     else {
                        echo  "<BR><BR> <h4 style='text-align:center;' ><span> Bonjour Monsieur</span> "
                        .ucfirst($_SESSION['nom_patient'])." ". ucfirst($_SESSION['prenom_patient']).
                                       "</h4> ";
                        echo '<div class="form-group">
                                       <div class="center"><button><a style="text-decoration=none; color:white;" href="rdv-avec-compte.php">Prendre RDV!</a></button></div>
                                    </div>';
                     } ?>
                  </div>


               </div>
            </div>
         </div>
      </div>
  </body>
  </html>
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
       button{
         padding: 20px;
         border: none;
         background: #37f;
         font-size: 30px;
         color: white;
         position: absolute;
         top:45%;
         cursor: pointer;
       }

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
<?php  


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


echo '<script language="Javascript">

document.location.replace("rdv-avec-compte.php");

</script>';


 }
 else
 {
   
  $erro="<h1 class='alert alert-danger' role='alert'>
Email  ou  Mot de passe  est Invalide </h1> ";
echo $error;

 
 }

 }
}


?>
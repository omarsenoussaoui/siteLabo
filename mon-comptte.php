<?php 
session_start();
 $conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");


if (!isset($_SESSION['nom_patient'])){
   header("location:login-patient.php");
 }
 ?>
 
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <style type="text/css"></style>
   <!-- Site Metas -->
   <title>Mon Compte</title>
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
   <!-- [if lt IE 9] -->
   <link rel="stylesheet" href="css/css-creez un comt/style.css"/>
   <script src="js/jquery.min.js"></script> 


   </head>
   <body style="font-size: 20px;font-family: Arial"  class="clinic_version">
      <!-- LOADER -->
      
   <header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          
                  <div id="navbar" class="navbar-collapse collapse">
                  <a class="navbar-brand" href="index.php"><img src="images/logo-2.png" alt="image"></a>
                     <ul class="nav navbar-nav">
                     
                        <li><a style="font-size: 20px;font-family: Arial"   href="index.php">Accueil</a></li>
                       
                        <li><a style="font-size: 20px;font-family: Arial" data-scroll href="">Services</a></li>
                        <li><a style="font-size: 20px;font-family: Arial"  dstyle="font-size: 20px;font-family: Arial"ata-scroll href="contact.php" target="_blanck">Contact</a></li>
                        <li><a style="font-size: 20px;font-family: Arial"data-scroll href="signup1.php">Rendez-Vous</a></li>
                        <li> <?php if (!isset($_SESSION['nom_patient'])) {
                          
                        ?>
                          <a onclick="myFunction()" onmouseover="myFunction()" class="dropbtn" style="font-size: 20px;font-family: Arial"  data-scroll >Connexion </a>
              <div class="dropdown">
                
                <div  id="myDropdown" class="dropdown-content">
                  <a  href="signup2.php" target="_blanck" style="font-size: 20px;font-family: Arial" data-scroll>Connectez </a>
                  <a data-scroll href="creez un compte.php " style="font-size: 20px;font-family: Arial">Inscription</a>
                </div>
              </div>
            </li> <?php 
            }else{
              echo "<li><a class='active'  style='font-size: 20px;font-family: Arial'data-scroll href='mon-compte.php'>Mon compte</a></li>";
              echo "<li><a style='font-size: 20px;font-family: Arial'data-scroll href='logout.php'>Logout</a></li>";
            }
             ?>
            
                     </ul>

                     
                  </div>

               </nav>
            
               
            </div>
         </div>
      </header>

    <div class="page-content">
    <div class="form-v10-content">
    <?php 
    if (isset($erreur1)and isset($erreur2)) {
      echo "<div class='alert alert-danger' role='alert'>".$erreur1." </div>";
      echo "<br>";
      echo "<div class='alert alert-danger' role='alert'>".$erreur2." </div>";
      
     }elseif (isset($erreur2)) {
      echo "<div class='alert alert-danger' role='alert'>".$erreur2." </div>";

     } elseif (isset($erreur1)) {
      echo "<div class='alert alert-danger' role='alert'>".$erreur1." </div>";

     }
     ?>
     <?php 
if(isset($_POST['modifier'])) {
  $id_patient = $_POST['id_patient'];
  $nom_patient = $_POST['nom'];
  $prenom_patient = $_POST['prenom'];
  $email_patient = $_POST['email'];
  $mot_passe = $_POST['mot_passe'];
  $num_tlp=$_POST['tlp'];

 
 $q="UPDATE patient SET nom_patient= '$nom_patient',prenom_patient='$prenom_patient',email = '$email_patient', mot_passePa = '$mot_passe', num_tlp='$num_tlp' WHERE id_patient='$id_patient' ";
if (mysqli_query($conn,$q)) 
{
  echo '<script>alert(" Modification avec succès")</script>'; 

  $_SESSION['id']=$id_patient;
  $_SESSION['nom_patient']=$nom_patient;
  $_SESSION['prenom_patient']=$prenom_patient;
  $_SESSION['email_patient']=$email_patient;
  $_SESSION['mot_passe']=$mot_passe;
  $_SESSION['num_tlp']=$num_tlp;
 header("Refresh:3");
 } else
 {
  echo "<div class='alert alert-danger' role='alert'>Échec de la modification</div>";
 }
}

?>
<script type="text/javascript"></script>
      <form class="form-detail" action="" method="post" id="myform" onsubmit="return verifForm(this)" >
        <div class="form-left">
          <h2><center>Mon Profile</center> </h2>
            <div class="form-row form-row-1">
              <input type="hidden" name="id_patient" value="<?php echo $_SESSION['id']; ?>" name="">
              <input type="text" name="nom" id="nom" class="input-text" value="<?php echo $_SESSION['nom_patient']; ?>"required>
            </div>
            <div class="form-row form-row-2">
              <input type="text" name="prenom"  class="input-text"  value="<?php echo $_SESSION['prenom_patient']; ?>" required>
            </div>
          <div class="form-row">
            <input type="text" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"  value="<?php echo$_SESSION['email_patient']; ?>" >
          </div>     
          <div class="form-row">
             <div class="input-group" id="show_hide_password">
              <input type="password" name="mot_passe"  class="input-text"  value="<?php echo$_SESSION['mot_passe']; ?>">
              <div style="background-color: white; border: 0px;" class= "input-group-addon">
              <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
            </div>
    </div>
          </div>    
           

          <div class="form-row" style="padding-bottom: 20px;" >
            <input type="text" name="tlp"  class="input-text"  value="<?php echo$_SESSION['num_tlp']; ?>">
          </div> <!--
          $_SESSION['id']=$row['id_patient'];
          $_SESSION['nom_patient']=$row["nom_patient"];
          $_SESSION['prenom_patient']=$row["prenom_patient"];
          $_SESSION['email_patient']=$row['email'];
          $_SESSION['mot_passe']=$row['mot_passePa'];
          $_SESSION['num_tlp']=$row['num_tlp'];-->
          <center><button style="font-size: 20px;font-family: Arial ; " type="envoyer" name="modifier" class="login100-form-btn">
              Modifier
            </button></center>

          </div>

        </div>
          
        </div>
        
      </form>
    </div>
  </div>
      

      <a href="#navbar" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>

      <script src="js/custom.js"></script>
      <script type="text/javascript">

      
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


$(document).ready(function(){
    var current = "<?php echo $_SESSION['nom_patient']; ?>" ;

    $('#nom').val(current);
      </script>
      <!-- show and hide password-->
      <script>
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
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
                          .login100-form-btn {
                          font-family: Montserrat-Bold;
                          font-size: 15px;
                          line-height: 1.5;
                          color: #fff;
                          text-transform: uppercase;

                          height: 50px;
                          border-radius: 25px;
                          background: #57b846;
                          display: -webkit-box;
                          display: -webkit-flex;
                          display: -moz-box;
                          display: -ms-flexbox;
                          display: flex;
                          justify-content: center;
                          align-items: center;
                          padding: 0 25px;

                          -webkit-transition: all 0.4s;
                          -o-transition: all 0.4s;
                          -moz-transition: all 0.4s;
                          transition: all 0.4s;
                        }
                        .login100-form-btn:hover {
                          background: #00c6ff;
                        }
              </style>

   </body>
</html>

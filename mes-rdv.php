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
   <body style="font-size: 20px;font-family: Poppins"  class="clinic_version">
      <!-- LOADER -->
      
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
                     
                        <li><a style="font-size: 20px;font-family: Poppins"   href="index.php">Accueil</a></li>
                       
                        <li><a style="font-size: 20px;font-family: Poppins" data-scroll href="">Services</a></li>
                        <li><a style="font-size: 20px;font-family: Poppins"  dstyle="font-size: 20px;font-family: Poppins"ata-scroll href="contact.php" target="_blanck">Contact</a></li>
                        <li><a style="font-size: 20px;font-family: Poppins"data-scroll href="signup1.php">Rendez-Vous</a></li>
                        <li> <?php if (!isset($_SESSION['nom_patient'])) {
                          
                        ?>
                          <a onclick="myFunction()" onmouseover="myFunction()" class="dropbtn" style="font-size: 20px;font-family: Poppins"  data-scroll >Connexion </a>
              <div class="dropdown">
                
                <div  id="myDropdown" class="dropdown-content">
                  <a  href="signup2.php" target="_blanck" style="font-size: 20px;font-family: Poppins" data-scroll>Connectez </a>
                  <a data-scroll href="creez un compte.php " style="font-size: 20px;font-family: Poppins">Inscription</a>
                </div>
              </div>
            </li> <?php 
            }else{
              echo "<li><a class='active'  style='font-size: 20px;font-family: Poppins'data-scroll href='mon-compte.php'>Mon compte</a></li>";
              echo "<li><a style='font-size: 20px;font-family: Poppins'data-scroll href='logout.php'>Logout</a></li>";
            }
             ?>
            
                     </ul>

                     
                  </div>

               </nav>
            
               
            </div>
         </div>
      </header>

<br><br><br>
<h1 class="text-danger text-center">Mes RDV</h1>
<table id="table-rdv" class="table table-bordered text-center">
    <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID Rdv</th>
      <th  class="text-center" scope="col">date</th>
      <th  class="text-center" scope="col">time</th>
      <th  class="text-center" scope="col">ord</th>
      <th  class="text-center" scope="col">Options</th>

      
    </tr>
  </thead>
  <tbody>
    <div >
 
 <?php 
 $id=$_SESSION['id'];
/*$sql = "SELECT * FROM rdv patient WHERE  'rdv.id_patient'='patient.id_patient'";*/
$sql = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id_patient and patient.id_patient= $id";
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;
while( $rows = mysqli_fetch_assoc($resul) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $rows["id_rdv"]; ?></td>
<td ><?php echo $rows["date"];?></td>
<td ><?php echo $rows["time"];?></td>
<td><a href="" data-toggle="modal" data-target="#myModal<?php echo $rows['id_rdv']; ?>" ><?php echo $rows["ord"]?></a></td>
<td id="ted"><button id="btn_show" data-id2="<?php echo $rows["id_rdv"]; ?>" data-id="<?php echo $rows["id_patient"]?>"class="btn btn-success"><i class="fa fa-print fa-2x"></i></button>

</td>
<!-- Button trigger modal -->
<!-- Modal -->
</tr>
  <!-------------------------------------------modal ordonnance--------------->
  <div id="myModal<?php echo $rows['id_rdv'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Details</h4>
              </div>
              <div class="modal-body">
               <h3> <img style="width: 100%;height: 100%;" src="ordonnances/<?php echo $rows['ord']; ?>" ></h3>
              </div>
          </div>
        </div>
      </div>
  <!-------------------------------------------modal ordonnance--------------->

<?php

}

?>


</div>
</tbody>
</table> 

      

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

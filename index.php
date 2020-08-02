<?php
session_start();
//index.php
$connect = mysqli_connect("localhost", "root", "", "labo");
function make_query($connect)
{
 $query = "SELECT * FROM banner where val=0 ORDER BY banner_id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
      {
       $output .= '
       <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
       ';
      }
  else
      {
       $output .= '
       <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
       ';
      }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
          {
           $output .= '<div class="item active ">';
          }
  else
          {
           $output .= '<div class="item">';
          }

  $output .= '
  
   <img style="width:100%;" "class="img-fluid" alt="Responsive image" src="images/'.$row["banner_image"].'" alt="'.$row["banner_title"].'" />
    <div class="carousel-caption">
          <h3>'.$row["banner_title"].'</h3>
          <p></p>
        </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
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
   <!-- Site Metas -->
   <title>MSC Lab</title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   </head>
   <body style="font-size: 20px;font-family: Arial"  class="clinic_version">
      <!-- LOADER -->
      
      <!-- END LOADER -->
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
                     
                        <li><a style="font-size: 20px;font-family: Arial"  class="active"  href="index.php">Accueil</a></li>
                       
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
              echo "<li><a style='font-size: 20px;font-family: Arial'data-scroll href='mon-comptte.php'>Mon compte</a></li>";
              echo "<li><a style='font-size: 20px;font-family: Arial'data-scroll href='logout.php'>Logout</a></li>";
            }
             ?>
            
                     </ul>

                     
                  </div>

               </nav>
            
               
            </div>
         </div>
      </header>
<br></br>
<div  class="container">
   <div  id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>
    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>

      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo-2.png" alt="#"></span>
               <h2>Laboratoire d'Analyse Médicale </h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h2>Notre Laboratoire</h2>
                     <p class="lead">lam7a 3la labo ta3na</p>
                     <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Plus d'Infos</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/about_03.jpg" alt="" class="img-responsive">
                    
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
          





</br>







</br>




     
 
    
    
    
    
     
            
         </div>
      </div>
       <footer id="footer" class="footer-area wow fadeIn" style="background-color:#1f1f2f;">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                 <div class="subcriber-info">
                     <h3 style="color: white;" >LOCALISATION</h3>
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="448" height="363" id="gmap_canvas" src="https://maps.google.com/maps?q=Laboratoire%20D'analyses%20M%C3%A9dicales%20Boudchiche&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:363px;width:448px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3 style="color: white;" >CONTACTEZ-NOUS</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> 8,boulvard Djamel Abdennaser Zone 8 Mascara (a coté de stade DNC)</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i>labomed.z8@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> 07 94 97 22 24</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> 05 61 12 55 89</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3 style="color: white;" >Horraire</h3>
                     
                     <table class="table table-dark">
            <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  
                </tr>
              </thead>
            <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
             
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td> </td>
                  <td></td>

                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td> </td>
                  <td></td>

                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td> </td>
                  <td></td>

                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td> </td>
                  <td></td>

                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td> </td>
                  <td></td>

                </tr>
            <tr>
                  <th scope="row"></th>
                  <td> </td>
                  <td></td>

                </tr>
            </tbody>
</table>
                  </div>
               </div>
            </div>
         </div>
      </footer>
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
      <!-- end copyrights -->
      <a href="#navbar" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
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

 
 
  <script type="text/javascript">

   var slider_content = document.getElementById('box');

   // contain images in an array
    var image = ['images/hhhhh.jpg','', '', ''];

    var i = image.length;


    // function for next slide 

    function nextImage(){
      if (i<image.length) {
         i= i+1;
      }else{
         i = 1;
      }
        slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
    }


    // function for prew slide

    function prewImage(){

      if (i<image.length+1 && i>1) {
         i= i-1;
      }else{
         i = image.length;
      }
        slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";

    }

  
  // script for auto image 


  setInterval(nextImage , 4500);

  </script>


  

   </body>
</html>


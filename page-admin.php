<?php 
   include('cnx.php');
session_start();
if (isset($_SESSION['admin'])) {
  
}else{
  header("location:login-admin.php");
}
echo "<br><br>";
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");



 ?>
 <?php include 'mail/sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
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
   <title>Administration</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/icons8-paramètres-administrateur-homme-64.png" type="image/x-icon"/>
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
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
              <link rel="stylesheet" href="style4.css">


   </head>
   <body style="font-size: 20px;"  class="clinic_version">
      <!-- LOADER -->
    
      <header>
         
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><button style="width: 50px; height: 50px;" type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify fa-2x"></i>
                                <span></span>
                            </button></li>
                        <li style="padding-left: 10px"><a style="font-size: 20px; " class="active"  href="page-admin.php">Admin</a></li>
                        <li><a style="font-size: 20px;"  href="tousrdv.php">Tous les RDV</a></li>
                        <li><a style="font-size: 20px;" data-scroll href="rdv-auj.php">RDV d'aujourd'hui</a></li>
                        <li><a style="font-size: 20px;"data-scroll href="services.php">Nos service</a></li> 
                        <li><a style="font-size: 20px;"data-scroll href="logout.php">Déconnexion</a></li>
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>

<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                
                <ul class="list-unstyled components">
                    <li class="">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Membres
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="gestion-admin.php">Admins</a></li>
                            <li><a href="gestion-patient.php">Patients</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="messages.php">
                            <i class="fa fa-envelope-open"></i>
                            Messages
                        </a>
                      
                    </li>
                    <li>
                        <a href="annc.php">
                            <i class="fa fa-bullhorn"></i>
                            Annonces
                        </a>
                    </li>
                    
                </ul>
                <ul class="list-unstyled CTAs">
                    <li><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm"class="download">
                      <i class="fa fa-share  icons"></i>
                      <h3 class="h3-download" style="color: #6d7fcc;">Envoyer des resutats</h3>
                    </a></li>
                     <li><a href="" data-toggle="modal" data-target="#modalRegisterForm2" class="article">
                      <i class="fa fa-commenting-o icons"></i>
                      <h3 class="h3-article" style="color: white;">Envoyer SMS</h3>
                    </a></li>
                                    
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        
                        
                    </div>
                    <h1></h1><?php echo $alert; ?>
                </nav>
                <!--<div class="line"></div>-->
            </div>
        </div>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Resultat </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form class="contact" action="" enctype="multipart/form-data" method="post">
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="orangeForm-name">ID RDV</label>
              <input type="text" id="id_rdv" name="id_rdv" class="form-control validate">
            </div>
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
              <input type="text" id="email" name="email" class="form-control validate">
            </div>
            <div class="md-form mb-5">
              <label data-error="wrong" data-success="right" for="orangeForm-name">Resultat</label>
              <input type="file" id="resutat" name="file" class="form-control validate">
            </div>
          </div>
               <div class="modal-footer d-flex justify-content-center">
            <button type="submit"  id="btn_send_mail" name="submit" class="btn btn-deep-orange">Envoyer</button>
      </div>
       </form>
    </div>
  </div>
</div>


<div class="modal fade" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Message SMS </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Numéro de telephone</label>
            <input type="text" id="orangeForm-name" class="form-control validate">
          </div>
          <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="orangeForm-name">Message</label>
            <input type="text" id="orangeForm" class="form-control validate">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Envoyer</button>
        </div>
    </div>
  </div>
</div>

   </body>
   <style type="text/css">


    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/

</style>


<!--style of slidbar-->
<style type="text/css">
  /*
    DEMO STYLE
*/
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    margin-top: 60px;
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

i, span {
    display: inline-block;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    margin-top: -80px;
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}
#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}
.icons {
  display: none;
}

#sidebar.active .sidebar-header h3, #sidebar.active .CTAs h3 {
    display: none;
}

 #sidebar.active .CTAs i{
  display: block;
  font-size: 30px;
}
#sidebar.active a.download,
#sidebar.active a.article{
  height: 70px;
  width: 60px;
  margin-left: -10px;
}

#sidebar.active .sidebar-header strong {
    display: block;
}
#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 10px;
}

#sidebar.active ul li a i {
    margin-right:  0;
    display: block;
    margin-bottom: 5px;
    font-size:35px;
}

#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
    top: auto;
    bottom: 5px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}


#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 15px;
    font-family: 'Glyphicons Halflings';
    font-size: 15px;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download {
    background: #fff;
    color: #7386D5;
}
.article{
  background: #6d7fcc;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important ;
    }
    a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
        top: auto;
        bottom: 5px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }

    #sidebar .sidebar-header h3, #sidebar .CTAs {
        display: block;
    }
     #sidebar .sidebar-header h3, #sidebar .CTAs i{
        display: block;
    }
    #sidebar .sidebar-header strong {
        display: block;
    }

    #sidebar ul li a {
        padding: 20px 10px;
    }

    #sidebar ul li a span {
        font-size: 0.85em;
    }
    #sidebar ul li a i {
        margin-right:  0;
        display: block;
    }

    #sidebar ul ul a {
        padding: 10px !important;
    }

    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebar {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
  
</style>
<!-- script slidbar-->
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');

                 });

             });
         </script>
           <script type="text/javascript">
             $(document).ready(function () {
                 $('#id_rdv').on('keyup', function () {
                     
                     ID = $("#id_rdv").val();
                     $.ajax({
                      url:'mail/mail.php',
                      method:"POST",
                      data:{ID:ID},
                      success:function (data) {
                        $("#email").val(data);
                        $("#modalRegisterForm").modal('show');
                      }
                     });
                     
                 });

             });
         </script>
             
</html>

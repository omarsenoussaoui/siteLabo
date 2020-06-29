<?php 

session_start();
if (isset($_SESSION['admin'])) {
  
}else{
  header("location:login-admin.php");
}
echo "<br><br>";
 ?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1"><!DOCTYPE html>
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
   <title> Les RDV d'aujourd'hui</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/" type="image/x-icon" />
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
                     <ul class="nav navbar-nav">
                        <li><a style="font-size: 20px;font-family: Arial;;" href="">RDV d'aujourd'hui</a></li>
                        
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
      <br><br>




    <table class="table">
  <caption>Les RDV</caption>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Date</th>
      <th scope="col">Nom Patient</th>
      <th scope="col">Prenom Patient</th>
      <th>Type d'Analyse</th>
      <th scope="col">Oordonnance</th>
      <th>accepter/refuser</th>
      

    </tr>
  </thead>
  <tbody>
    <tr>
      <td >1</td>
      <td>18-11-2020</td>
      <td>djilali</td>
      <td>djilali</td>
      <td>Bio</td>
      <td id="i5" > <img style="width: 100px;height: 100px;" src="images/2019-03-19.jpg"> </td>
      <td>
         <button type="button" class="btn btn-danger">refuser</button> 
        <button type="button" class="btn btn-success">accepter</button>
      </td>

    </tr>
     <tr>
      <td >2</td>
      <td>20-15-2022</td>
      <td>djilali</td>
      <td>djilali</td>
      <td>humm</td>
      <td> <img style="width: 100px;height: 100px;" src="images/2019-03-19.jpg"> </td>
      <td> <button type="button" class="btn btn-danger">refuser</button> 
        <button type="button" class="btn btn-success">accepter</button>

</td>

    </tr>
   
  </tbody>
</table>
 
      
 

   </body>
  
</html>

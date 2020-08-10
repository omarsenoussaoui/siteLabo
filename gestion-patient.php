<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");

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
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <!-- Site Metas -->
   <title>Patients</title>
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
                        <li><a style="font-size: 20px;font-family: Arial;;" href="">Gestion des patients</a></li>
                        
                     </ul>
                    
                  </div>
               </nav>
               
            </div>
         </div>
      </header>
      <br><br>


<br>
<h1 class="text-danger text-center">La Liste des Patients</h1>
<table class="table table-bordered table-dark text-center">
  <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID</th>
      <th  class="text-center" scope="col">Nom</th>
      <th  class="text-center" scope="col">Prénom</th>
      <th  class="text-center" scope="col">E-MAIL</th>
      <th  class="text-center" scope="col">Mot de Passe</th>
      <th  class="text-center" scope="col">Numéro de telephone</th>
      <th  class="text-center" scope="col">rdv</th>

      
    </tr>
  </thead>
  <tbody>
    <div >
<?php 
$sql = "SELECT `id_patient`, `nom_patient`, `prenom_patient`, `email`, `mot_passePa`, `num_tlp` FROM `patient`  "  ;
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;

while( $rows = mysqli_fetch_assoc($resul) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $rows["id_patient"]; ?></td>
<td><?php echo $rows["nom_patient"]; ?></td>
<td><?php echo $rows["prenom_patient"]?></td>
<td><?php echo $rows["email"]?></td>
<td><?php echo $rows["mot_passePa"]?></td>
<td><?php echo $rows["num_tlp"]?></td>
<td><?php echo $rows['']?></td>

</tr>
<?php

}

?>
</div>
</tbody>
</table>
<table class="table table-bordered table-dark text-center">
  <thead>
    <tr >
      <th  class="text-center" scope="col">Num</th>
      <th  class="text-center" scope="col">ID</th>
      <th  class="text-center" scope="col">date</th>
      <th  class="text-center" scope="col">Type</th>
      <th  class="text-center" scope="col">ord</th>
      <th  class="text-center" scope="col">ID patient</th>

      
    </tr>
  </thead>
  <tbody>
    <div >
 
 <?php 
$sql = "SELECT `id_rdv`, `date`, `type_analyse`, `ord`, `id_patient` FROM `rdv` WHERE  2";
$resul = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$i = 0;

while( $rows = mysqli_fetch_assoc($resul) ) {
?>
<tr>
<td><?php echo $i=$i+1; ?></td>
<td><?php echo $rows["id_rdv"]; ?></td>
<td><?php echo $rows["date"]; ?></td>
<td><?php echo $rows["type_analyse"]?></td>
<td><?php echo $rows["ord"]?></td>
<td><?php echo $rows["id_patient"]?></td>

</tr>
<?php

}

?>
</div>
</tbody>
</table>
 

   </body>
  
</html>

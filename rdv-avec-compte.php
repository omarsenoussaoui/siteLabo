<?php session_start();
 $conn = mysqli_connect("localhost", "root", "");
   $db = mysqli_select_db($conn, "labo"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RDV</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/css-rdv/style.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Site Metas -->
   <title>RDV</title>
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
</head>

<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
            <div>
            <?php 

if (isset($_SESSION['nom_patient'])) {
   echo  "<h1 class='alert alert-success ' role='alert'> Bonjour Monsieur "
.ucfirst($_SESSION['nom_patient'])." ". ucfirst($_SESSION['prenom_patient'])." Si vous voulez Prendre un RENDEZ-VOUS Remplissez ce formulaire".
 "</h1> ";
    ?>
 </div>
			<form class="form-detail" method="post" id="myform" enctype="multipart/form-data">
				<div class="form-right">
					<div class="form-right">
					<h2>INFORMATION POUR RENDEZ-VOUS</h2>
					<div class="form-row">
						<input type="Date" name="datte" class="" id="" placeholder="" required>
            <input type="time" name="timme" class="" id="" placeholder="" required>
					</div>
					

					<!--<div class="container">
						<ul class="ks-cboxtags">
							<label style="color: white; font-size: 17px; " > Choisissez le type d'Analyse   </label> </br><br>
							 <li><input type="checkbox" id="checkboxOne" value="Rainbow Dash"><label for="checkboxOne">HUMONOLOGIE</label></li>
							 <li><input type="checkbox" id="checkboxTwo" value="Cotton Candy" ><label for="checkboxTwo">BIOCHEMIE</label></li>
							 <li><input type="checkbox" id="checkboxThree" value="Rarity" ><label for="checkboxThree">IMMUNOLOGIE</label></li>
							 <li><input type="checkbox" id="checkboxFour" value="Moondancer"><label for="checkboxFour">PARASITOLOGIE</label></li>
							<li  ><input type="checkbox" id="checkboxFive" value="Surprise"><label for="checkboxFive">BIOCHIMIE</label></li>
							
						 </ul>
            -->

					</div>					
						<div class="form-row">
							<label style="color: white;" > Scannez Votre Ordonnance SVP !</label><br><br>
							<input type="file" name="ord" style="border: 0px;" required>
						</div>
					<div class="form-row-last">
						<input type="submit" name="reserver" class="register" value="Envoyer">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

<!-- CheckBox Style -->

<style type="text/css">
	
.container {
    max-width: 640px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    padding-left: 50px;
}

ul.ks-cboxtags {
    list-style: none;
    padding: 20px;
}
ul.ks-cboxtags li{
  display: inline;
}
ul.ks-cboxtags li label{
    display: inline-block;
    background-color: rgba(255, 255, 255, .9);
    border: 2px solid rgba(139, 139, 139, .3);
    color: #adadad;
    border-radius: 25px;
    white-space: nowrap;
    margin: 3px 0px;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    transition: all .2s;
}

ul.ks-cboxtags li label {
    padding: 8px 12px;
    cursor: pointer;
}

ul.ks-cboxtags li label::before {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 12px;
    padding: 2px 6px 2px 2px;
    content: "\f067";
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
    content: "\f00c";
    transform: rotate(-360deg);
    transition: transform .3s ease-in-out;
}

ul.ks-cboxtags li input[type="checkbox"]:checked + label {
    border: 2px solid #1bdbf8;
    background-color: #12bbd4;
    color: #fff;
    transition: all .2s;
}

ul.ks-cboxtags li input[type="checkbox"] {
  display: absolute;
}
ul.ks-cboxtags li input[type="checkbox"] {
  position: absolute;
  opacity: 0;
}
ul.ks-cboxtags li input[type="checkbox"]:focus + label {
  border: 2px solid #e9a1ff;
}

</style>
</html>


 <?php 
          /*ajouter annonce*/
          
if (isset($_POST['reserver'])) 
{
  $id_patient=$_SESSION['id'];
  $datte= $_POST['datte'];
  $timme= $_POST['timme'];
  $ord = $_FILES['ord'];
  $filetmp = $ord['tmp_name'];/*chemin*/
  $filename= $ord['name'];/*nom*/
  $fileext=explode('.',$filename);
  $filecheck = strtolower(end($fileext));
  $fileextstored = array('png','jpg');
  if (in_array($filecheck,$fileextstored)) 
  {
    $distinationfile='ordonnances/'.$filename;
    move_uploaded_file($filetmp, $distinationfile);
  $q="INSERT INTO `rdv`(`id_rdv`, `date`, `time`, `type_analyse`, `ord`, `id_patient`) VALUES ('','$datte','$timme','','$filename','$id_patient')";
       if (mysqli_query($conn,$q))
       {
         echo "<script> alert('La saisie est succée'); </script> ";
       }
  }else
  {
        $errreur="ce fichier n'est pas une image";
  }
}
}
?>
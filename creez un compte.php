<?php
session_start();
	 $conn = mysqli_connect("localhost", "root", "");
	 $db = mysqli_select_db($conn, "labo");
if (isset($_POST['envoyer'])) {
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$tlp=$_POST['tlp'];
	$mot_passe=$_POST['mot_passe'];
	$mot_passeC=$_POST['mot_passeC'];
	if ($mot_passe!=$mot_passeC and (!ctype_alpha($nom) or !ctype_alpha($prenom)) ) {
		$erreur1="les mots passe ne sont pas egaux";
		$erreur2="le nom ou le prenom contient des chiffres non alphabétique";
	}elseif ($mot_passe!=$mot_passeC  ) {
		$erreur1="les mots passe ne sont pas egaux";
	}elseif (!ctype_alpha($nom) or !ctype_alpha($prenom)) {
		$erreur2="le nom ou le prenom contient des chiffres non alphabétique";
	}else{
	echo $nom;
	
	$q="INSERT INTO `patient`(`id_patient`, `nom_patient`, `prenom_patient`, `email`, `mot_passePa`, `num_tlp`) VALUES ('','$nom','$prenom','$email','$mot_passe','$tlp')";
	if (mysqli_query($conn,$q)) {
		$_SESSION['nom_patient']=$nom;
		$_SESSION['prenom_patient']=$prenom;
		header("location:index.php");
	}
	}
}




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Creez un compte </title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/css-creez un comt/style.css"/>
       <link rel="stylesheet" href="css/bootstrap4.min.css">

</head>
<body class="form-v10">
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
			<form class="form-detail" action="" method="post" id="myform" onsubmit="return verifForm(this)" >
				<div class="form-left">
					<h2>INFORMATIONS GENERALES </h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="nom"  class="input-text" placeholder="Nom" required onblur="verifName(this)">
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="prenom"  class="input-text" placeholder="Prenom" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="E-mail" onblur="verifMail(this)">
					</div>	
					<div class="form-row">
						<input type="password" name="mot_passe"  class="input-text" placeholder="Mot de Passe"  onblur="verifPass(this),verifconf(this)">
					</div>		
					<div class="form-row">
						<input type="password" name="mot_passeC"  class="input-text" placeholder="Confirmer Mot de Passe" onkeyup="verifconf(this)">
					</div>		

					<div class="form-row" style="padding-bottom: 20px;" >
						<input type="text" name="tlp"  class="input-text"  placeholder="Numéro de Telephone">
					</div>
					

					
					<button style="font-size: 20px;font-family: Arial ;margin-bottom: 15px; " type="envoyer" name="envoyer"  class="login100-form-btn">
							Creez un Compte
						</button>
						<br><br>
					<br><br>
					</div>

				</div>
					
				</div>
				
			</form>
		</div>
	</div>
</body>
<style type="text/css">
		/*style button*/
.login100-form-btn {
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;

margin-left: 30%;
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
	<script type="text/javascript">
		
		function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
function verifName(champ) {
	 var regex = /^[a-zA-Z]/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifPass(champ)
{
   
  if (champ.value.length==0) {
  	surligne(champ, true);
      return false;
  }else{
  	return true;
  }
  
}
function verifconf() {
	 pass = document.getElementById('mot_passe').value;
     cf_pass = document.getElementById('mot_passeC').value;
	 
       if (pass1 != cf_pass) {
	  
            document.getElementById('mot_passe').style.color = "#ff0000";
	   }
       else {
	  
	        document.getElementById('mot_passe').style.color = "#00ff00";
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
</html>
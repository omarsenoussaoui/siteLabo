<?php 
session_start();
if (isset($_SESSION['nom_patient'])) {
  header("location:rdv-avec-compte.php");
}
 ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <title> Connexion </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container body-content">
      <div class="container">


                    <div class="row justify-content-start" style="padding-top:10px;">

                <div class="col" style="padding-top:10px;">

<a href="login-patient.php">
<img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px; " src="images/login--.png" /><br><br>
<div  style=" padding-left: 200px; color: white; font-size: 20px; " >  J'ai un compte </div>


                </div>
                <div class="col" style="padding-top:10px;">
</a>
<a href="signup.php">
<img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px; " src="images/sign-up-png.png" /><br><br>

 <div  style="color: white; padding-left: 160px;font-size: 20px; "  >Je n'ai pas de  compte  </div> 
</a>

                </div>
                </div>
                


</div>



    </div>
</body>
<style type="text/css">
	body{
		 background: #009bff;
  background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
  background: -o-linear-gradient(left, #0072ff, #00c6ff);
  background: -moz-linear-gradient(left, #0072ff, #00c6ff);
  background: linear-gradient(left, #0072ff, #00c6ff);
	}

</style>
</html>

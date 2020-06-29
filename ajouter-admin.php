<?php  
include('cnx.php');
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");
session_start();
if (isset($_SESSION['admin'])) {
  
}else{
  header("location:login-admin.php");
}


if (isset($_POST['modifier']) ) {

			$email=$_POST['email'];
			$mot_passe=$_POST['mot_passe'];
				
			$id_admin=$_GET{"id"};
			$sql = "UPDATE `admin` SET `email`='$email' , `mot_passe`='$mot_passe'  WHERE id_admin=$id_admin";
			if (mysqli_query($conn, $sql)) {
			    header("refresh:0; url =gestion-admin.php"); 
			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			}

}


?>
<!DOCTYPE html>
 <html>
    <head>
        <title>Modifier ADMIN</title>
        <meta charset='utf-8'>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     </head>
     <body>
       <form action="" method="post" onsubmit="return verifForm(this)">
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="Email" onblur="verifMail(this)">
   
  </div>
  <div class="form-group">
    <label >Mot de passe </label>
    <input type="password" class="form-control" name="mot_passe" placeholder="Mot de passe" onblur="verifPass(this)">
  </div>
  
  <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
</form>
         </div>
    </body>
    <script type="text/javascript">
    		
		function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
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

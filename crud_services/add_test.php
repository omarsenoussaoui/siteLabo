<?php 
	if (isset($_POST["type_analyse"]) && isset($_POST['test']) &&  isset($_POST['technique']) && isset($_POST['delai'])) {
		$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");
	 $type=$_POST['type_analyse'];
      $test=$_POST['test'];
      $technique=$_POST['technique'];
      $delai=$_POST['delai'];
     $query =  "INSERT INTO `test`(`id_test`, `type_analyse`, `nom_test`, `technique`, `delai`) VALUES ('','$type','$test','$technique','$delai')" ;

      if (mysqli_query($conn,$query))
    {
          echo 'ajoué';
      
    }
    else 
    {
      echo 'erreur';
    }
  }


 ?>

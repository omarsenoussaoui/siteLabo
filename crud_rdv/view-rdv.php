<?php 
//afficher les donnees dans les champs
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "labo");

function get_rec()
{
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "labo");
	$UserID = $_POST['ID'];
	$query = "SELECT * FROM `patient` WHERE id_patient ='$UserID'";
	$result = mysqli_query($conn,$query);
	while ($rows = mysqli_fetch_assoc($result)) 
	{
		$User_data[0]= $rows['id_patient'];
		$User_data[1]= $rows['nom_patient'];
		$User_data[2]= $rows['prenom_patient'];
		$User_data[3]= $rows['email'];
		$User_data[4]= $rows['mot_passePa'];
		$User_data[5]= $rows['num_tlp'];

	}
	echo json_encode($User_data);

}
get_rec();

 ?>
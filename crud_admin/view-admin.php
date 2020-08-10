<?php 
//afficher les donnees dans les champs
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "labo");

function get_rec()
{
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "labo");
	$id_admin = $_POST['ID'];
	$query = "SELECT * FROM `admin` WHERE id_admin ='$id_admin'";
	$result = mysqli_query($conn,$query);
	while ($rows = mysqli_fetch_assoc($result)) 
	{
		$User_data[0]= $rows['id_admin'];
		$User_data[1]= $rows['email'];
		$User_data[2]= $rows['mot_passe'];

	}
	echo json_encode($User_data);

}
get_rec();

 ?>
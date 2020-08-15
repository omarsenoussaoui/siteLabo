<?php 
//afficher les donnees dans les champs
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "labo");

function get_rec()
{
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "labo");
	$UserID = $_POST['ID'];
	$query = "SELECT * FROM `banner` WHERE banner_id ='$UserID'";
	$result = mysqli_query($conn,$query);
	while ($rows = mysqli_fetch_assoc($result)) 
	{
		$User_data[0]= $rows['banner_id'];
		$User_data[1]= $rows['banner_title'];
		$User_data[2]= $rows['banner_image'];
		$User_data[3]= $rows['detail'];

	}
	echo json_encode($User_data);

}
get_rec();

 ?>
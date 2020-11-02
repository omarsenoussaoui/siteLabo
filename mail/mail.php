<?php 

	$conn=mysqli_connect("localhost","root","");
	$db= mysqli_select_db($conn,"labo");
	if (isset($_POST['ID']) and $_POST['ID']!="") {
		
	
	$sql = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id_patient and rdv.id_rdv like '%".$_POST['ID']."%'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
		if (isset($row['email'])) 
		{
			echo $row['email'];
		}else {
			echo "Non valide";
		}
		
	}
	else
	 {
		echo "";
	}
 ?>
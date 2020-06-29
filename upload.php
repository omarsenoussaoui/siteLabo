<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

<div class="container">
	<h1 class="text-center text-white bg-dark">
		NOM AVEC PROFIL
	</h1>
	
			</thead>
			<tbody>
				
				<?php 

					$con = mysqli_connect('localhost','root');
					mysqli_select_db($con,'displayupload');
					if (isset($_POST['submit'])) 
					{
						$username=$_POST['username'];
						$files = $_FILES['file'];
						print_r($username);
						echo "</br>";
						$filetmp = $files['tmp_name'];
						$filename= $files['name'];
						print_r($filename);
						$fileext=explode('.',$filename);
						$filecheck = strtolower(end($fileext));
						$fileextstored = array('png','jpg');
						if (in_array($filecheck,$fileextstored)) {
							$distinationfile='upload/'.$filename;
							
							/*$q="INSERT INTO `imgupload`(`username`, `image`) VALUES ('$username','$distinationfile')";
							$query = mysqli_query($con,$q);
							$querydisplay= mysqli_query($con,$displayquery);*/

						
						
					}
					}	
						

				 ?>
			

</div>
<style type="text/css">
	#image :hover{
		width: 300px;
		height: 300px;
	}
</style>

</body>
</html>
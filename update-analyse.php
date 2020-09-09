
<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "labo"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}


$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];

$query = "UPDATE rdv SET ".$field."='".$value."' WHERE id_rdv=".$editid;
mysqli_query($con,$query);

echo $field; echo " ";
echo $value; echo " ";
echo $editid; echo " ";
?>
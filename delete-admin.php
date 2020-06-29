  <?php 
// page pour l'insertion des donnees avec ajax
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");

function deletee()
{ 
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");
  $id = $_POST['ID'];
$sql = "UPDATE `admin` SET `val`=1 WHERE id_admin=$id";
  $result = mysqli_query($conn,$sql);
  if ($result) {
    echo "deleted Successfully";
  }
  else 
  {
    echo "ERROR , no delete";
  }
  
}
deletee();
?>
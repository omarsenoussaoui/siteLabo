<?php 

$num1 = substr($_POST['num'], 1);
$num = '+213'.$num1;
$message = $_POST['message'];
require_once __DIR__.'/vendor/autoload.php'; 
use Twilio\Rest\Client; 
 
$sid    = "AC5b950e06f99be374cb0cc2584672395e"; 
$token  = "9f93e8b0f96fb32a16f7c0e02ca938f9"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create($num, // to 
                           array( 
                               "from" => "+14844357573",       
                               "body" => $message 
                           ) 
                  ); 
 
print($message->sid);
$id_rdv=$_POST['id_rdv'];
$conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "labo");

$sql = "UPDATE `rdv` SET `accept`=1 WHERE id_rdv=$id_rdv";
  $result = mysqli_query($conn,$sql);
  if ($result) {
    echo "deleted Successfully";
  }
  else 
  {
    echo "ERROR , no delete";
  }
?>

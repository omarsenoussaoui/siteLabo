<?php 
 

$num1 = substr($_POST['num'], 1);
$num = '+213'.$num1;
$message = $_POST['message'];
require_once __DIR__.'/vendor/autoload.php'; 
use Twilio\Rest\Client; 
 
$sid    = "AC5b950e06f99be374cb0cc2584672395e"; 
$token  = "693a7f0c77ce42e50df37e65d49d8797"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create($num, // to 
                           array( 
                               "from" => "+14844357573",       
                               "body" => $message 
                           ) 
                  ); 
 
print($message->sid);


?>
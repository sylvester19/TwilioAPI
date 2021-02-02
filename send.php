<?php 
  require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "AC4ad556980215cc3240d8e5c6bf5e6263"; 
$token  = "ab5feeffb1dde0a431b0ae8147bc6736"; 
$twilio = new Client($sid, $token);
$phone =$_POST['phone']; 
$msg=$_POST['msg'];
 
$message = $twilio->messages 
                  ->create("whatsapp:+91".$phone, // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => $msg 
                           ) 
                  ); 
 echo "Msg Delivered";
//print($message->sid);
//print_r($message);
?>
<?php
/* 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once '/path/to/vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
   
partha 
$sid    = "ACec12ffee577500db01721559ed7d65a8"; 
$token  = "4d0ef5f084e1c1331cb75347a3f50e15";
 
$sid    = "AC4ad556980215cc3240d8e5c6bf5e6263"; 
$token  = "ab5feeffb1dde0a431b0ae8147bc6736"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+918013740691", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "test" 
                           ) 
                  ); 
 
print($message->sid);
*/
?>
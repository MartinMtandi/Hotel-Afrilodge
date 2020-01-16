 
 
  
<?php
echo "<h1> SENDING MAIL ". rand(0,100) ."</h1>
  </br>";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
 require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {$mail = new PHPMailer(true);

$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);// Set email format to HTML

$mail->Username = 'mbwekup@gmail.com';// SMTP username
$mail->Password = 'Thepromiseland-2020';// SMTP password

$mail->setFrom('peter@263africatv.com', 'Peter Mbweku the Rock');//Your application NAME and EMAIL
$mail->Subject = 'Good Moring Jesus';//Message subject
$mail->MsgHTML('This is my first mail ');// Message body
$mail->addAddress('mbwekupeter@gmail.com', 'Petro');// Target email


$mail->send();


} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?> 
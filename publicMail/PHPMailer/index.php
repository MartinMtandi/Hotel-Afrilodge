 
 
  
<?php
echo "<h1> SENDING MAIL  index sigma systems ". rand(0,100) ."</h1>
  </br>";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
  require 'vendor/autoload.php';
                             // Passing `true` enables exceptions
try {
	
	
	$mail = new PHPMailer(true);

$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = true;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'cpanel.freehosting.com'; // 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 587;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->isHTML(true);// Set email format to HTML 
$mail->Username = 'peter@sigmasystems.co.zw';// SMTP username
$mail->Password = 'unicode2016';// SMTP password

$mail->setFrom('banou@263africatv.com', 'Banou-Tendertube Systems');//Your application NAME and EMAIL
$mail->Subject = 'heiusgcbuk\fseBanou Success | Good Moring Jesus | Thank you Jesus';//Message subject
$mail->MsgHTML('eruhncrbkhujThis is my first mail  and it works Thank you Jesus ');// Message body
$mail->addAddress('mbwekupeter@gmail.com', 'Petro');// Target email
$mail->addAddress('mbwekup@gmail.com', 'Petro Mbweku');// Target email


$mail->send();
echo "Email Sent Successfully ";

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?> 
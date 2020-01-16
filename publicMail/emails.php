

 	<?php
  	//-----------------------Email Library ------------------------------
	  use PHPMailer\PHPMailer\PHPMailer;
	  use PHPMailer\PHPMailer\Exception;
	  require 'PHPMailer/vendor/autoload.php';
	  $mail = new PHPMailer(true);  
	   //-----------------------Email Library ------------------------------ 
	  
	$hotel = $_REQUEST['hotel'];
	@$name = $_REQUEST['name'];
	@$email = $_REQUEST['email']; 
	@$subjecto = $_REQUEST['subject'];
	@$message = $_REQUEST['message']; 
	 $error = 0; 


	//  echo $name. "<br/>";
	//  echo $email. "<br/>";
	//  echo $subject. "<br/>";
	//  echo $message. "<br/>";



	 //---------------------------Name only ------------------------------
	 if(empty($name) && !empty($message) && !empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'>Please enter your Name.</p>";		
	}

		 

	 //---------------------------Message only ------------------------------
	if(!empty($name) && empty($message) && !empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'> Please enter your Message. </p>";		
	}

	 //---------------------------Email  only ------------------------------
	 if(!empty($name) && !empty($message) && empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'>Please enter your Email.</p>";		
	}
	
	//--------------------------- Name and message  ------------------------------
	if(empty($name) && empty($message) && !empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'>Please enter your Name and Message.</p>";		
	}

	//---------------------------  Name and Email ------------------------------
	if(empty($name) && !empty($message) && empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'>Please enter your Name and Email.</p>";		
	}
	
	//---------------------------  Message and Email ------------------------------
	if(!empty($name) && empty($message) && empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'>Please enter your Email and  Message.</p>";		
	}


	if(empty($name) && empty($message) && empty($email)){ 
		$error = 1;
		echo "<p class='alert alert-danger'>Please enter your Name , Email and Message.</p>";		
	}

if(!empty($email)){
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){		
		echo "<p class='alert alert-danger'>Email address is considered invalid. </p>";	
	}
}

	if($error == 0){

		if($hotel == "lodge")
		{
			$recipients = "afrilodge@yahoo.com";
		}
		else
		{
			$recipients = "thestandardhotel2013@gmail.com";

		}

		

		$from_email = $email;
		$from_name = $name;
		$subject = "Correspondence from ". $hotel ." : ".$subjecto;


 
		email($mail,$recipients,$from_email,$from_name,$subject,$message);


		echo "<p class='alert alert-primary'> Your message have been successfully sent. </p>";	
	}
 
  

 

  
	function email($email,$recipients,$from_email,$from_name,$subject,$message){
 
 
		$email->isSMTP();
		//	$email->SMTPDebug = 1;
		
			$email->SMTPSecure = 'ssl';  // Enable TLS encryption, `ssl` also accepted
			$email->Host = 'mail.afrilodge.co.zw';  // 'smtp.gmail.com';// Specify main and backup SMTP servers
			//$email->SMTPDebug = 1;
			$email->Port = 465;
			$email->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			); 
		
			$email->SMTPAuth = true;
			$email->SMTPKeepAlive = true; 
	 
		
			$email->Username = "reception@afrilodge.co.zw";
			$email->Password = "2EeH3k-VT";
			$email->setFrom($from_email, $from_name );  //('reception@afrilodge.co.zw', 'Hotel- Afrilodge'); 
		 
			$email->addReplyTo($from_email, $from_name );
			$email->From = $from_email;
			$email->FromName = $from_name;
			$email->Subject = $subject;
			$email->Body = $message;
			$email->IsHTML(true); 
			$email->Timeout = 15;
			if(is_array($recipients))
			{
				foreach($recipients as $recipient)
				{
					$email->addAddress($recipient);
				}
			}
			else
			{
				$email->addAddress($recipients);
			}
			if(!empty($cc))
			{
				foreach($cc as $key => $value)
				{
					$email->AddCC($value);
				}
			}
			if(!empty($attachments))
			{
				foreach($attachments as $key => $attachment)
				{
					$email->addAttachment($attachment, $key);
				}
			}
			if($email->send())
			{
				return "Message has been sent";
			}
			else
			{
				return "Message could not be sent: " . $email->ErrorInfo;
			}
		
		} // end of email
		

 

	

?>

<style>

.alert-danger{
		color:red;
	}

.alert-primary{
	color:blue;
}

</style>
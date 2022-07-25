<?php 
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
 

function verify_mail($user, $otp){
	$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'ksebproject2022@gmail.com';   // SMTP username 
$mail->Password = 'yycqspsnxcomeaoe';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('ksebproject2022@gmail.com', 'kseb'); 
// $mail->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
 
// Add a recipient 
$mail->addAddress($user); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'OTP for sign in for KSEB'; 
 
// Mail body content 
$bodyContent = '<h1>Please use the below OTP for verification to register your account</h1>'; 
$bodyContent .= '<p>OTP: <b>'.$otp.'</b></p>';
$bodyContent .= '<p>Please note that this OTP is valid only for 10 minutes</p>';
$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 

}

// $otp = random_int(100000,999999);
// verify_mail('jishachacko26@gmail.com', $otp)
 
?>


<?php

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@yourdomain.com
  mail( "venkatreddy251198@gmail.com", "Test",$message, "From: $email" );
?>

<?php
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp1.varshamedias.dq;smtp2.varshamedias.dq";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "sa";  // SMTP username
$mail->Password = "admin@123"; // SMTP password

$mail->From = "from@example.com";
$mail->FromName = "Mailer";
$mail->AddAddress("josh@example.net", "Josh Adams");
$mail->AddAddress("ellen@example.com");                  // name is optional
$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>

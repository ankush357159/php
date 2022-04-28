<?php 
ini_set("sendmail_from", "ankush357159@gmail.com");
$to = "ankush.wankar@yahoo.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$header = "Content-type: text/html; charset=iso-8859-1\r\n";

$result = mail($to, $subject, $message, $header);

if (!$result) {
    echo "Error sending email: " . $result;
} else {
    echo "Email sent";
}
?>

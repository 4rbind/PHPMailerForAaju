<?php
require "includes/Exception.php";
require "includes/PHPMailer.php";
require "includes/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->SMTPSecure="tls";
$mail->Port="587"; //Common SMTP ports: 35, 587, 465, 2525; yo nachale arko port try gara
$mail->Username="senderKoEmail@gmail.com";
$mail->Password="SenderKoPassword";
$mail->Subject="Email ko lagi subject";
$mail->setFrom("receiverKoEmail@gmail.com");
$mail->isHTML("true");
$mail->Body="Email ko lagi body. Yesma HTML tag haru maja le chalxa.";
$mail->addAddress("receiverKoEmail@gmail.com");
if($mail->Send()){
    echo "Successfully Sent";
}
else{
    echo "Failed to send the email";
}
$mail->smtpClose();

//receiver wala email ko: account.google.com ma gayera login garne, Security bhitra "Less secure app access" enable garne


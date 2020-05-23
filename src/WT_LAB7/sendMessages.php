<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';

if ($_GET['sendMessage'] == "send"){
    $mail = new PHPMailer(true);

    $messageBody = $_GET['messageText'];
    $receivers = $_GET['receivers'];
    $topic = $_GET['topic'];
    $senderEmail = '-';
    $senderPassword = '-';

    $emailsArr = str_getcsv($receivers,',');

    echo "Sending message to:<br>";
    foreach($emailsArr as $key => $email){
        echo $email.'<br>';
    }

    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = $senderEmail;
    $mail->Password = $senderPassword;

    $mail->setFrom($senderEmail, 'IGOR');

    foreach($emailsArr as $key => $email){
        $mail->addAddress($email);
    }

    $mail->Subject = $topic;
    $mail->Body = $messageBody;

    $mail->send();
    $mail->clearAddresses();

}



//try {
//
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
//    $mail->isSMTP();                                            // Send using SMTP
//    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
//    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
//
//    //Recipients
//    $mail->setFrom('pyexglobal@gmail.com', 'IGOR');
//    $mail->addAddress('goganad99@gmail.com');     // Add a recipient
//
//    // Content
//    $mail->isHTML(true);                                  // Set email format to HTML
//    $mail->Subject = 'Here is the subject';
//    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//    $mail->send();
//    echo 'Message has been sent';
//} catch (Exception $e) {
//    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}

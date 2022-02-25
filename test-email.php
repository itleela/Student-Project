<?php

    $s_name = 'JIGAR PATEL';
    $email = 'ADMIN@GMAIL.com';
    $mobile = '8000569940';
    $msg = 'My email message.';

    require 'phpmail/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    
    $mail->setFrom('26it2017@gmail.com', 'Jigar Patel');
    
	$mail->addAddress('26it2017@gmail.com', 'Enlighten');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Enquiry by ';

    //$message = '<html><body>';

    $mail->Body .= '<h3 style="color:black;">Dear Mr. Akil Surti</h3>';

    $mail->Body .= '<h3 style="color:black;">You Have Enquiry For Following Details:-</h3>';
 
    if ($mail->send()) {

        echo 'Success.';

    } else {

        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>
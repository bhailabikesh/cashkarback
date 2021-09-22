<?php
// require 'phpmailer/PHPMailerAutoload.php';

// $mail = new PHPMailer;

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'support@gadgetzco.com';                 // SMTP username
// $mail->Password = 'Bhulgaya@1';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to

// $mail->setFrom('support@gadgetzco.com', 'Gadgetzco');
// //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
// $mail->addAddress('kcbishal2001@gmail.com');               // Name is optional
// $mail->addReplyTo('support@gadgetzco.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');

// //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Here is the subject';
// $mail->Body    = '<p style="color:red;">This is the HTML message body </p><b>in bold!</b>';
// //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }










function get_client_ip() {
    $ipaddress = '';
    if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    return $ipaddress;
}
echo get_client_ip();



























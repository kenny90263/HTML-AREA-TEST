<?php
header("location: http://www.23801122.com.tw/thank.html");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.23801122.com.tw';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mailserver@23801122.com.tw';                 // SMTP username
    $mail->Password = '@WKmnOn@kVNg';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mailserver@23801122.com.tw', '表單寄送');
    $mail->addAddress('kenny831027@gmail.com');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('kenny831027@gmail.com');
    $mail->addBCC('support@ateam.tw');
    $mail->addBCC('sai@108.com.tw');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'UTF-8';
    $mail->Subject = '聯絡我們-線上表單';
    $mail->Body    = '<h2>網站有人填寫表單哦：</h2><br>姓名：' . $_POST['name'] . '<br>' . '電話：' . $_POST['TEL'] . '<br>' . 'Email：' . $_POST['email'] . '<br>所需服務：' . $_POST['txt_message'];
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'congdtps40376@gmail.com';// SMTP username
    $mail->Password = 'rsqg uodf fwuc ryja'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    //Recipients
    $mail->setFrom('congdtps40376@gmail.com', 'Mailer');
    $mail->addAddress('khoandps40402@gmail.com', 'Thành Công'); // Add a recipient
   // $mail->addAddress('ellen@example.com'); // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
  //  $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
    // Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
 //   $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Hoa don';
    $text = "san pham";
    // $text = "Họ Tên: ".$_SESSION['user'][0]['fullname']."<br>";
    // $text .= "Địa chỉ: ".$_SESSION['user'][0]['address']."<br>";
    // $text .= "Email: ".$_SESSION['user'][0]['email']."<br>";
    // $text .= "<table border = '1'><tr>
    // <td>Stt</td>
    // <td>Name</td>
    // <td>Price</td>
    // <td>SoLuong</td>
    // <td>Money</td>
    // </tr>";
    // $tongdh =0;
    // for($i=0;$i<count($_SESSION['giohang']);$i++){
    //     $gh = new giohang;
    //     $gh = $_SESSION['giohang'][$i];
    //     $tongdh += $gh->getPrice()*$gh->getAmount();
    //     $text .= "<tr>";
    //     $text .= "<td>".$i +1;"</td>";
    //     $text .= "<td>".$gh->getId()."</td>";
    //     $text .= "<td><img height=50px width=50px src=".$gh->getName()."></td>";
    //     $text .= "<td>".$gh->getName()."</td>";
    //     $text .= "<td>".$gh->getPrice()."</td>";
    //     $text .= "<td>x</td>";
    //     $text .= "<td>".$gh->getAmount()."</td>";
    //     $text .= "<td>=</td>";
    //     $text .= "<td>".$gh->getPrice()*$gh->getAmount()."</td>";
    //     $text .= "</tr>";
    // }
    // $text .="<tr><td colspan = 7>Tổng Tiền</td><td colspan = 2>".$tongdh."</td></tr>";
    // $text .= "</table>";
    $mail->Body = $text;
    $mail->AltBody = '';
    $mail->send();
    echo 'Message has been sent';
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
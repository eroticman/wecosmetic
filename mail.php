<?php
require('plugins/phpmailer/class.phpmailer.php');
$mail = new PHPMailer();

$mail->CharSet 		= "utf-8";
$mail->IsSMTP();
$mail->SMTPDebug 	= 0;
$mail->SMTPAuth 	= true;
$mail->Host 		= "mail.we-cosmetic.com"; // SMTP server
$mail->Port 		= 587; // พอร์ท
$mail->Username 	= "info@we-cosmetic.com"; // account SMTP
$mail->Password 	= "HQolWu8ZgF"; // รหัสผ่าน SMTP

$mail->SetFrom("info@we-cosmetic.com", "Support");
$mail->Subject =  'ติดต่อจากทางเว็บไซต์' . ' ' . 'คุณ' . $_POST['name'];

$msg = 'ชื่อ : ' . $_POST['name'] . '<br />';
$msg .= 'เบอร์โทรศัพท์ : ' . $_POST['phone'] . '<br />';
$msg .= 'ไลน์ไอดี : ' . $_POST['lineId'] . '<br />';
$msg .= '-----------------------------------------------------------------------------------------------------------------------' . '<br />';
$msg .= 'เรื่องติดต่อ : ' . $_POST['subject'] . '<br />';
$msg .= 'ข้อความ : ' . $_POST['message'];

$mail->MsgHTML($msg);
$mail->AddAddress("bewnipawan@gmail.com");

if(!$mail->Send()) {
    $message = 'error';
} else {
    $message = 'send';
}
?>
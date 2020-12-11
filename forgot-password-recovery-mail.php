<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $User["username"] . ",<br><br><p>Click this link to recover your password<br>
<a href='" . PROJECT_HOME . "/reset_password.php?name=" . $User["username"] . "'>" . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;
$mail->Username = 'shubhangighadge1998@gmail.com';    ;
$mail->Password = 'shubhangi1998' ;
$mail->Host     =  'smtp.gmail.com';  // Specify main and backup SMTP servers;
$mail->Mailer   = MAILER;

$mail->SetFrom('shubhangighadge1998@gmail.com', 'shubhangi ghadge');
$mail->AddReplyTo('shubhangighadge1998@gmail.com', 'shubhangi ghadge');
$mail->ReturnPath='shubhangighadge1998@gmail.com';
$mail->AddAddress($User["email"]);
$mail->Subject = "Forgot Password Recovery";
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
}

?>

<?php
$msg="";
if(isset($_POST['submit'])) {
    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer;

   $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'mail.rojagaar.in';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'info@rojagaar.in';                 // SMTP username
                    $mail->Password ='yogi@2020' ;                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465;                                    // TCP port to connect to


                    $mail->setFrom('info@rojagaar.in', 'rojagaar.in');
                    $mail->addAddress($User['email']);

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'REGISTRATION SUCCESSFULLY DONE';
$mail->Body    = '<h2><b>Your Registration Details Are </b></h2>'.
'<h3> Your firstname: '.$_POST['firstname'].  '<br>Your lastname:'.$_POST['lastname'].'<br>Email:'.$_POST['email'].'</h3>';

if($isRegistered == true) {
    if($mail->send()) {
    if(true) {
        $msg=$lang['registerdone'];
    }
} else if ($isRegistered == false) {
    $msg=$lang['registerfail'];
}
}

}
?>

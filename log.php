<?php
session_start();
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit"])) {

        $sql = "Select * from register where mobile = '" . $_POST["mobileno"] . "'";
        // if(!isset($_COOKIE["member_login"])) {
        //     $sql .= " AND password = '" . md5($_POST["password"]) . "'";
        // }


        setcookie('mobileno', $_POST['mobileno']);

        $result = mysqli_query($conn,$sql);
        $User = mysqli_fetch_array($result);

        if($User) {
            // send OTP
            if(!$_POST['verifyotp']) {
                // Account details
                $apiKey = urlencode('8MYPTaxdfaI-9Af3q75FZoB45xLMH9lFgYxiXiXkQf');

                // Message details
                $numbers = "91".$_POST['mobileno'];
                $sender = urlencode('TXTLCL');
                $otp = rand(1000,9999);
                $message = rawurlencode('Hey, Your OTP to login is ' . $otp);

                // Prepare data for POST request
                $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message, "test" => true);

                // Send the POST request with cURL
                $ch = curl_init('https://api.textlocal.in/send/');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                setcookie('otp', $otp);
                curl_close($ch);



                 require 'PHPMailerAutoload.php';
                    $mail = new PHPMailer;

                    // Enable verbose debug outp
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
                    $mail->Subject = 'OTP for login';
                    $mail->Body    = '<p>Hey, Your OTP to login is <b>'. $otp .'<b/></p>';
                    // $mail->send();

                // open login screen with otp field.
                header('Location:index.php');
            }

            if($_POST['verifyotp']) {
                if($_POST['verifyotp'] == $_COOKIE['otp']) {
                    setcookie("otp", "", time() - 3600);
                    // login
                    // header('Location:profile.php');

                    $_SESSION['Firstname'] = $User['firstname'];
                    $_SESSION['lastname'] = $User['lastname'];
                    $_SESSION['address'] = $User['address'];
                    $_SESSION['village'] = $User['village'];
                    $_SESSION['taluka'] = $User['taluka'];
                    $_SESSION['district'] = $User['district'];
                    $_SESSION['state'] = $User['state'];
                    $_SESSION['email'] = $User['email'];
                    $_SESSION['username'] = $User['username'];
                    $_SESSION['gender'] = $User['gender'];
                    $_SESSION['mobile'] = $User['mobile'];

                    $_SESSION['logged_in'] = true;

                    header('Location:dashboard.php');
                } else {
                    setcookie("otp", "", time() - 3600);
                    $_SESSION['msg'] = "Invalid OTP";
                    header('Location:index.php');
                }
            }
 {
                if(isset($_COOKIE["member_login"])) {
                    setcookie ("member_login","");

                    $msg = "Logged In Successfully!";
                    $_SESSION['msg'] = $msg;

                }
            }

        } else {
            echo "<pre> error:: ";print_r($_POST);
            $_SESSION['msg'] = "Invalid Login";
            header('Location:index.php');
        }
    }
}
?>













          <!--
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'shubhangighadge1998@gmail.com';                 // SMTP username
                    $mail->Password ='shubhangi1998' ;                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to


                    $mail->setFrom('shubhangighadge1998@gmail.com', 'rojagaar.in');
                    $mail->addAddress($User['email']);

                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'OTP for login';
                    $mail->Body    = '<p>Hey, Your OTP to login is <b>'. $otp .'<b/></p>';
                    $mail->send(); -->

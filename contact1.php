<?php session_start();
include('connect.php');

$name = $email  = $subject = $message = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
$nameErr = $emailErr  = $subjectErr = $messageErr = "";
$b=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $blog_id= $_POST["blog_id"];

    $dor = date("Y-m-d H:i:s");


if (empty($_POST["name"])) {
    $nameErr = "*name is required";
    $b=false;
  } else {
    $name = test_input($_POST["name"]);

  }

 if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
    $b=false;
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/^[a-zA-Z0-9\.]*@[a-z\.]{1,}[a-z]*$/",$email) || $email=='') {
      $emailErr = "*Enter a Valid Email";
      $b=false;
    }
  }


if (empty($_POST["subject"])) {
    $subjectErr = "*subject is required";
    $b=false;
  } else {
    $subject = test_input($_POST["subject"]);

  }

if (empty($_POST["message"])) {
    $messageErr = "*message is required";
    $b=false;
  } else {
    $message = test_input($_POST["message"]);

  }



}
if($b==true && isset($_POST['submit']))
{
      $query = "insert into blog(name,email,subject,message,dor) values('".$name."','".$email."','".$subject."','".$message."','".$dor."')";
          $result= mysqli_query($conn,$query);

   if($result)
      {
      $msg="Message Sent Successfully";
      }
       else {
   $msg="Message Not Send";
     }

     }


  ?>






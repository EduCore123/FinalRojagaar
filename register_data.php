<?php
include('connect.php');
$isRegistered = "";
$firstname = $lastname = $address = $email = $username = $gender = $mobile = $dor = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$firstnameErr = $lastnameErr = $addressErr = $emailErr =  $usernameErr = $mobileErr = $dor =  "";
$b=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


$userData = [];
$userData['firstname'] = $_POST['firstname'];
$userData['lastname'] = $_POST['lastname'];
$userData['address'] = $_POST['address'];
$userData['email'] = $_POST['email'];
$userData['gender'] = $_POST['opt'];
$userData['mobile'] = $_POST['mobile'];
$userData['village'] = $_POST['village'];
$userData['taluka'] = $_POST['taluka'];
$userData['district'] = $_POST['district'];
$userData['state'] = $_POST['state'];


  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $username = test_input($_POST["username"]);
  $mobile= test_input($_POST["mobile"]);
  $gender = test_input($_POST["opt"]);
  $address = test_input($_POST["address"]);
  $village = test_input($_POST["village"]);
  $taluka = test_input($_POST["taluka"]);
  $district = test_input($_POST["district"]);
  $state = test_input($_POST["state"]);

  $dor = date("Y-m-d H:i:s");

 if (empty($_POST["firstname"])) {
    $firstnameErr = "*firstname is required";
    $b=false;
  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "*lastname is required";
    $b=false;
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

  if (empty($_POST["username"])) {
    $usernameErr = "*username is required";
    $b=false;
  } else
  {
    if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $sql_u = "SELECT * FROM register WHERE username='$username'";
      $res_u = mysqli_query($conn, $sql_u);


      if (mysqli_num_rows($res_u) > 0) {
        $usernameErr = "Sorry... username already taken";
        $b=false;
      }
    }
  }

}

if($b==true && isset($_POST['submit']))
{

  $isRegistered = false;
  $sql = "insert into register(firstname,lastname,address,village,taluka,district,state,email,username,gender,mobile,dor) values('$firstname','$lastname','$address','$village','$taluka','$district','$state','$email','$username','$gender','$mobile','$dor')";
  $res=$conn->query($sql);
  $sql1="select register_id from register where username='$username'";
  $result=$conn->query($sql1);
  $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
  $_SESSION['username']=$username;
  $_SESSION['id']=$row['register_id'];

  if($row['register_id']) {
    $isRegistered = true;
     $userData = [];
  }
}

?>

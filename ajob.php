<?php session_start();
include('connect.php');

$name = $email  = $phn = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$nameErr  = $emailErr  = $phnErr   =  "";
$b=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	  $job_id= $_POST["job_id"];
      $skills= $_POST["skills"];
        $total= $_POST["total"];
          $avlfrm= $_POST["avlfrm"];
            $till= $_POST["till"];
             $name= $_POST["name"];
    $village = $_POST['village'];
    $taluka = $_POST['taluka'];
      $phn = $_POST['phn'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $dor = date("Y-m-d H:i:s");

        $_SESSION['village'] = $village;
        $_SESSION['taluka'] = $taluka;
        $_SESSION['district'] = $district;
        $_SESSION['state'] = $state;
        $_SESSION['name'] = $name;
        $_SESSION['phn'] =$phn;

if (empty($_POST["name"])) {
    $nameErr = "*lastname is required";
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
 if (empty($_POST["phn"])) {
    $phnErr = "*Contact Number is required";
    $b=false;
  }
}
if($b==true && isset($_POST['submit']))
{
	  $query = "insert into jobapply(skills,availabilty,availablefrom,till,name,email,phn,village,taluka,district,state,dor,job_id) values('".$skills."','".$total."','".$avlfrm."','".$till."','".$name."','".$email."','".$phn."','".$village."','".$taluka."','".$district."','".$state."','".$dor."','".$job_id."')";
          $result= mysqli_query($conn,$query);


 $_SESSION['id']=$row['job_id'];

    
   if($result)
      {
      $msg=$lang['applicationsend'];
      }
       else {
      $msg=$lang['applicationnotsend'];
     }

     }


  ?>






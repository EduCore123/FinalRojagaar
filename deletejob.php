<?php
error_reporting(0);
include_once 'connect.php';
$loggedInUser = $_SESSION['username'];
$sql = "DELETE FROM jobs_master WHERE  job_id='" . $_GET["job_id"] . "'";
if (mysqli_query($conn, $sql)) {
   
     $_SESSION['msg'] = "Record deleted successfully";
          header('Location:home.php');

} else {
     $_SESSION['msg'] = "Error deleting record". mysqli_error($conn);
          header('Location:home.php');

}
mysqli_close($conn);
?>
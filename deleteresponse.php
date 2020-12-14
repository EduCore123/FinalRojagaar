<?php
error_reporting(0);
include_once 'connect.php';
$loggedInUser = $_SESSION['username'];
$sql = "DELETE FROM jobapply WHERE  apply_id='" . $_GET["apply_id"] . "'";
if (mysqli_query($conn, $sql)) {

     $_SESSION['msg'] = "Record deleted successfully";
          header('Location:response1.php');

} else {
     $_SESSION['msg'] = "Error deleting record". mysqli_error($conn);
          header('Location:response1.php');

}
mysqli_close($conn);
?>

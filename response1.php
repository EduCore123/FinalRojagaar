<?php
session_start();
include('connect.php');

 $loggedInUser = $_SESSION['email'];
$sql = "SELECT * FROM jobapply left join jobs_master on jobapply .job_id  = jobs_master .job_id WHERE jobapply.email = '". $loggedInUser ."' ORDER BY date(jobdate) desc;";
// select * from jobapply left join jobs_master on jobapply .job_id  = jobs_master .job_id WHERE  jobapply.email = "ashwinimadyal15@gmail.com";

$result = mysqli_query($conn, $sql);
$arrResult = [];

if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'response.php';


?>


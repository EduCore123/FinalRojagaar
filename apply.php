<?php
session_start();
include('connect.php');


$loggedInUser = $_SESSION['username'];

$sql = "SELECT * FROM jobapply LEFT JOIN jobs_master ON jobapply.job_id = jobs_master.job_id WHERE jobkey='" . $_GET["jobkey"] . "' AND( jobby='". $loggedInUser ."') ";
$result = mysqli_query($conn, $sql);
$arrResult = [];

if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'jobapplies.php';

?>

<?php
session_start();
include('connect.php');

$loggedInUser = $_SESSION['username'];
$sql = "SELECT * FROM jobs_master WHERE jobby='". $loggedInUser ."' ORDER BY date(jobdate) desc;";

$result = mysqli_query($conn, $sql);
$arrResult = [];

if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'postjobdetail.php';


?>



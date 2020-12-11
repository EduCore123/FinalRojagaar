<?php
session_start();
include('connect.php');

$sql = "SELECT * FROM jobs_master ORDER BY date(jobdate) desc;";
$result = mysqli_query($conn, $sql);
$arrResult = [];

if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'wantjob.php';


?>



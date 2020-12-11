<?php
session_start();
include('connect.php');

$sql = "SELECT * FROM blog ORDER BY date(dor) desc;";
$result = mysqli_query($conn, $sql);
$arrResult = [];

if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'blog.php';


?>

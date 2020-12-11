<?php
session_start();

  include('connect.php');


 if(isset($_POST["submit1"]))
 {
     $search1=$_POST["search1"];

      $location1=$_POST["location1"];

$sql = "SELECT * FROM jobapply LEFT JOIN jobs_master ON jobapply.job_id = jobs_master.job_id
 WHERE jobkey= '".$search1."' and (village LIKE '%".$location1."%' or taluka LIKE '%".$location1."%' or district LIKE '%".$location1."%' or state LIKE '%".$location1."%')";
$result = mysqli_query($conn, $sql);
$arrResult = [];

if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'searchlist1.php';

}
?>

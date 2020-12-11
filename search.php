<?php
session_start();

include('connect.php');


if(isset($_POST["submit"]))
{
   $search=$_POST["search"];

    $location=$_POST["location"];

   $sql = "select * from jobs_master where jobkey='".$search."' and (jobvillage LIKE '%".$location."%' or jobtaluka LIKE '%".$location."%' or jobdistrict LIKE '%".$location."%' or jobstate LIKE '%".$location."%')";
   $result = mysqli_query($conn, $sql);
   $arrResult = [];

   if($result) {
    $arrResult = $result->fetch_all(MYSQLI_ASSOC);
}

require 'searchlist.php';

}

?>



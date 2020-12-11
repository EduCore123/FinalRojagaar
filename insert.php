<?php
 	session_start();
	include('connect.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$jobkey = $_POST['select'];
		$requirementofworkers = $_POST['total'];
		$requiredfrom = $_POST['rqdfrm'];
		$till = $_POST['till'];
		$jobvillage = $_POST['jobvillage'];
		$jobtaluka = $_POST['jobtaluka'];
		$jobdistrict = $_POST['jobdistrict'];
		$jobstate = $_POST['jobstate'];
		$mob = $_POST['mob'];
		$jobby = $_POST['jobby'];
		$jobdesc = $_POST['jobdesc'];
		$jobdate = date("Y-m-d H:i:s");

		$sql = "INSERT INTO jobs_master (jobkey,requirementofworkers,requiredfrom,till,jobvillage,jobtaluka,jobdistrict,jobstate,mob,jobby, jobdesc,jobdate)
			   VALUES ('$jobkey','$requirementofworkers','$requiredfrom','$till','$jobvillage','$jobtaluka','$jobdistrict','$jobstate','$mob','$jobby', '$jobdesc','$jobdate')";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
		$_SESSION['message'] ="Unable to upload job !!!";
			 header("Location: postjob.php");
		}
		else {
			  $_SESSION['message'] = "Job Posted Successfully!";
             header("Location: postjob.php");
		}
	}

	?>

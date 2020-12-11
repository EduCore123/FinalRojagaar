<?php

if(!isset($_SESSION['lang']))
	$_SESSION['lang'] = 'en';

if($_GET['lang'] == 'mar') {
	$_SESSION['lang'] = "mar";
}

if($_GET['lang'] == 'en') {
	$_SESSION['lang'] = "en";
}

if($_GET['lang'] == 'hindi') {
    $_SESSION['lang'] = "hindi";
}

require_once"lang/".$_SESSION['lang'] .".php";
?>

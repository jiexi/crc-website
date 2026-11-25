<?php
$redirect = $_GET['r'];


switch($redirect)
{
case "yp":
	$url = "http://concordrecyclingcenter.com?yp";
	break;
default:
	$url = "http://concordrecyclingcenter.com";
}

header('Location: '.$url);

?>
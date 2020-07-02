<?php

include('../connect/db.php');

	$dcoid=$_POST["dcoid"];
	$password=$_POST["password"];
	
$sql = "update doctor set password='$password' where dcoid='$dcoid'";
$q1 = $db->prepare($sql);
$q1->execute();
		

header("location:index.php");

?>						

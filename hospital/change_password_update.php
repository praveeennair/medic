<?php

include('../connect/db.php');

	$hid=$_POST["hid"];
	$password=$_POST["password"];
	
$sql = "update hospital set password='$password' where hid='$hid'";
$q1 = $db->prepare($sql);
$q1->execute();
		

header("location:index.php");

?>						

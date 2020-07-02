<?php

include('../connect/db.php');

	$hid=$_GET["hid"];	
	
$sql = "update hospital set stat='pending' where hid='$hid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:hospital_block.php");

?>						

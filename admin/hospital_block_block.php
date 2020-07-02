<?php

include('../connect/db.php');

	$hid=$_GET["hid"];	
	
$sql = "update hospital set stat='approve' where hid='$hid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:hospital_block.php");

?>						

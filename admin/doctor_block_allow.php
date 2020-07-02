<?php

include('../connect/db.php');

	$dcoid=$_GET["dcoid"];	
	
$sql = "update doctor set stat='pending' where dcoid='$dcoid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:doctor_block.php");

?>						

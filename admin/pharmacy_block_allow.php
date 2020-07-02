<?php

include('../connect/db.php');

	$phid=$_GET["phid"];	
	
$sql = "update pharmacy set stat='pending' where phid='$phid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:pharmacy_block.php");

?>						

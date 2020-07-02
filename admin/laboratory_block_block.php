<?php

include('../connect/db.php');

	$labid=$_GET["labid"];	
	
$sql = "update laboratory set stat='approve' where labid='$labid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:laboratory_block.php");

?>						

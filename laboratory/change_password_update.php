<?php

include('../connect/db.php');

	$labid=$_POST["labid"];
	$password=$_POST["password"];
	
$sql = "update laboratory set password='$password' where labid='$labid'";
$q1 = $db->prepare($sql);
$q1->execute();
		

header("location:index.php");

?>						

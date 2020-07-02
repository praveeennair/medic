<?php

include('../connect/db.php');

	$patid=$_POST["patid"];
	$password=$_POST["password"];
	
$sql = "update patient set password='$password' where patid='$patid'";
$q1 = $db->prepare($sql);
$q1->execute();
		

header("location:index.php");

?>						

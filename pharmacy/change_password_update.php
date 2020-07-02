<?php

include('../connect/db.php');

	$phid=$_POST["phid"];
	$password=$_POST["password"];
	
$sql = "update pharmacy set password='$password' where phid='$phid'";
$q1 = $db->prepare($sql);
$q1->execute();
		

header("location:index.php");

?>						

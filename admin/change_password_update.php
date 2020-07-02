<?php

include('../connect/db.php');

	$aid=$_POST["aid"];
	$password=$_POST["password"];
	
$sql = "update admin set password='$password' where aid='$aid'";
$q1 = $db->prepare($sql);
$q1->execute();
		

header("location:index.php");

?>						

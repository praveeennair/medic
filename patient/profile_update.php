<?php
include('../connect/db.php');
	
	$patid=$_POST["patid"];
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];
	$email=$_POST["email"];
	$ecntno=$_POST["ecntno"];
	
$sql = "update patient set addr='$addr',cntno='$cntno',email='$email',ecntno='$ecntno' where patid='$patid'";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:profile.php");
?>
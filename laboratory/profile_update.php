<?php
include('../connect/db.php');

	$labid=$_POST["labid"];
	$type=$_POST["type"];	
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];
	$licenam=$_POST["licenam"];
	
$sql = "update laboratory set type='$type',addr='$addr',cntno='$cntno',licenam='$licenam' where labid='$labid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:profile.php");
?>
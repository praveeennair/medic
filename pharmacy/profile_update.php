<?php
include('../connect/db.php');

	$phid=$_POST["phid"];	
	$type=$_POST["type"];	
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];

$sql = "update pharmacy set type='$type',addr='$addr',cntno='$cntno' where phid='$phid'"; 
$q1 = $db->prepare($sql);
$q1->execute();

header("location:profile.php");
?>
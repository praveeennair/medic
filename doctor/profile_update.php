<?php
include('../connect/db.php');

	$dcoid=$_POST["dcoid"];
	$hname=$_POST["hname"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];
	$qual=$_POST["qual"];
	$special=$_POST["special"];
	$exp=$_POST["exp"];
	
$sql = "update doctor set hname='$hname',email='$email',addr='$addr',cntno='$cntno',qual='$qual',special='$special',exp='$exp' where dcoid ='$dcoid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:profile.php");
?>
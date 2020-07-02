<?php
include('../connect/db.php');

	$hid=$_POST["hid"];
	$type=$_POST["type"];
	$addr=$_POST["addr"];
	$npersoname=$_POST["npersoname"];
	$tnonper=$_POST["tnonper"];
	$npersonem=$_POST["npersonem"];
	$emno=$_POST["emno"];
	$ambno=$_POST["ambno"];
	$blbnkno=$_POST["blbnkno"];
	$helpno=$_POST["helpno"];
	$website=$_POST["website"];
	$speciali=$_POST["speciali"];
	$facili=$_POST["facili"];

$sql = "update hospital set
type='$type',addr='$addr',npersoname='$npersoname',tnonper='$tnonper',npersonem='$npersonem',emno='$emno',ambno='$ambno',blbnkno='$blbnkno',helpno='$helpno',website='$website',speciali='$speciali',facili='$facili' where hid='$hid'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:profile.php");
?>
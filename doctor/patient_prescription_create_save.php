<?php
include('../connect/db.php');
	
	$uniqno=$_POST["uniqno"];
	$name=$_POST["name"];
	$aadhar=$_POST["aadhar"];
	$bgrp=$_POST["bgrp"];
	$hname=$_POST["hname"];
	$doctor=$_POST["doctor"];
	$deseases=$_POST["deseases"];
	$prescri=$_POST["prescri"];
	$labchk=$_POST["labchk"];
	$dat=date("d/m/Y");
	
$sql = "insert into prescription
(uniqno,name,aadhar,bgrp,hname,doctor,deseases,prescri,labchk,dat) VALUES ('$uniqno','$name','$aadhar','$bgrp','$hname','$doctor','$deseases','$prescri','$labchk','$dat')";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:index.php");
?>
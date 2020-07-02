<?php
include('../connect/db.php');
	
	$uniqno=$_POST["uniqno"];
	$name=$_POST["name"];
	$hname=$_POST["hname"];
	$doctor=$_POST["doctor"];
	$deseases=$_POST["deseases"];
	$prescri=$_POST["prescri"];
	$pname=$_POST["pname"];
	$amount=$_POST["amount"];
	$dat=date("d/m/Y");
	
$sql = "insert into pharmacyamount
(uniqno,name,hname,doctor,deseases,prescri,pname,amount,dat) VALUES ('$uniqno','$name','$hname','$doctor','$deseases','$prescri','$pname','$amount','$dat')";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:index.php");
?>
<?php
include('../connect/db.php');
	
	$hname=$_POST["hname"];
	$name=$_POST["name"];
	$sex=$_POST["sex"];	
	$dob=$_POST["dob"];
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];
	$aadhar=$_POST["aadhar"];
	$email=$_POST["email"];
	$ecntno=$_POST["ecntno"];
	$relsp=$_POST["relsp"];
	$bgrp=$_POST["bgrp"];
	$des=$_POST["des"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$dat=date("d/m/Y");
	$typ="patient";
	
	$rn=rand(987455,2);
	$uniqno=strtoupper(substr($name."".$rn,0,12));
	
$sql = "insert into patient
(hname,name,uniqno,sex,dob,addr,cntno,aadhar,email,ecntno,relsp,bgrp,username,password,des,typ,dat) VALUES ('$hname','$name','$uniqno','$sex','$dob','$addr','$cntno','$aadhar','$email','$ecntno','$relsp','$bgrp','$username','$password','$des','$typ','$dat')";
$q1 = $db->prepare($sql);
$q1->execute();
session_start();
$_SESSION['SESS_UNIQ_NO']=$uniqno;
header("location:patient_unique_no.php");
?>
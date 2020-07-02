<?php
include('../connect/db.php');
	
	$uniqno=$_POST["uniqno"];
	$name=$_POST["name"];
	$hname=$_POST["hname"];
	$doctor=$_POST["doctor"];
	$deseases=$_POST["deseases"];
	$prescri=$_POST["prescri"];
	$lname=$_POST["lname"];
	$amount=$_POST["amount"];
	$des=$_POST["des"];
	$dat=date("d/m/Y");
	
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name = addslashes($_FILES['file']['name']);
	$image_size = getimagesize($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
	$file = "../upload/" . $_FILES["file"]["name"];
	
$sql = "insert into laboratoryamount
(uniqno,name,hname,doctor,deseases,prescri,lname,amount,dat,file,des) VALUES ('$uniqno','$name','$hname','$doctor','$deseases','$prescri','$lname','$amount','$dat','$file','$des')";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:index.php");
?>
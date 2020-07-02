<?php
include('../connect/db.php');

	$name=$_POST["name"];
	$type=$_POST["type"];
	$accredat=$_POST["accredat"];
	$addr=$_POST["addr"];
	$hregno=$_POST["hregno"];
	$npersoname=$_POST["npersoname"];
	$tnonper=$_POST["tnonper"];
	$npersonem=$_POST["npersonem"];
	$emno=$_POST["emno"];
	$ambno=$_POST["ambno"];
	$blbnkno=$_POST["blbnkno"];
	$helpno=$_POST["helpno"];
	$website=$_POST["website"];
	$eyear=$_POST["eyear"];
	$speciali=$_POST["speciali"];
	$facili=$_POST["facili"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$stat="pending";
	$dat=date("d/m/Y");
	$typ="hospital";
	
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name = addslashes($_FILES['file']['name']);
	$image_size = getimagesize($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
	$file = "../upload/" . $_FILES["file"]["name"];
	
	$qrycheck = $db->prepare("SELECT * FROM hospital WHERE name='$name'");
	$qrycheck->execute();
	$countregister = $qrycheck->rowcount();
	//Check whether the query was successful or not
	if($countregister > 0) 
	{
		//Login failed
		echo "<script>alert('Already Registered'); window.location='hospital_create.php'</script>";
		exit();
	}
	else
	{
$sql = "insert into hospital
(name,type,accredat,addr,hregno,file,npersoname,tnonper,npersonem,emno,ambno,blbnkno,helpno,website, eyear,speciali,facili,username,password,stat,dat,typ) VALUES ('$name','$type','$accredat','$addr','$hregno','$file','$npersoname','$tnonper','$npersonem','$emno','$ambno','$blbnkno','$helpno','$website','$eyear','$speciali','$facili','$username','$password','$stat','$dat','$typ')";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:hospital_view.php");
}
?>
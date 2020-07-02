<?php
include('../connect/db.php');

	$name=$_POST["name"];
	$type=$_POST["type"];	
	$addr=$_POST["addr"];
	$licenam=$_POST["licenam"];
	$cntno=$_POST["cntno"];
	$dateofe=$_POST["dateofe"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$stat="pending";
	$dat=date("d/m/Y");
	$typ="pharmacy";
	
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name = addslashes($_FILES['file']['name']);
	$image_size = getimagesize($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
	$file = "../upload/" . $_FILES["file"]["name"];

	$qrycheck = $db->prepare("SELECT * FROM pharmacy WHERE name='$name'");
	$qrycheck->execute();
	$countregister = $qrycheck->rowcount();
	//Check whether the query was successful or not
	if($countregister > 0) 
	{
		//Login failed
		echo "<script>alert('Already Registered'); window.location='pharmacy_create.php'</script>";
		exit();
	}
	else
	{
$sql = "insert into pharmacy
(name,type,addr,cntno,liceno,file,dateofe,username,password,stat,dat,typ) VALUES ('$name','$type','$addr','$cntno','$licenam','$file','$dateofe','$username','$password','$stat','$dat','$typ')";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:pharmacy_view.php");
	}
?>
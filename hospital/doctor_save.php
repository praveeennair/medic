<?php
include('../connect/db.php');

	$name=$_POST["name"];
	$hname=$_POST["hname"];
	$sex=$_POST["sex"];	
	$dob=$_POST["dob"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$cntno=$_POST["cntno"];
	$qual=$_POST["qual"];
	$special=$_POST["special"];
	$exp=$_POST["exp"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$stat="pending";
	$dat=date("d/m/Y");
	$typ="doctor";
	
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$image_name = addslashes($_FILES['file']['name']);
	$image_size = getimagesize($_FILES['file']['tmp_name']);
	move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
	$file = "../upload/" . $_FILES["file"]["name"];
	
	$qrycheck = $db->prepare("SELECT * FROM doctor WHERE name='$name' and addr='$addr'");
	$qrycheck->execute();
	$countregister = $qrycheck->rowcount();
	//Check whether the query was successful or not
	if($countregister > 0) 
	{
		//Login failed
		echo "<script>alert('Already Registered'); window.location='doctor_create.php'</script>";
		exit();
	}
	else
	{
$sql = "insert into doctor
(name,hname,sex,dob,email,addr,cntno,qual,special,file,exp,username,password,typ,stat,dat) VALUES ('$name','$hname','$sex','$dob','$email','$addr','$cntno','$qual','$special','$file','$exp','$username','$password','$typ','$stat','$dat')";
$q1 = $db->prepare($sql);
$q1->execute();
header("location:doctor_view.php");
	}
?>
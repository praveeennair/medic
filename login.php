<?php
	//Start session
	session_start();
	include('connect/db.php');
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
	//Create query
	
	$qryadmin = $db->prepare("SELECT * FROM admin WHERE username='$username' AND password='$password' AND typ='admin'");
	$qryadmin->execute();
	$countadmin = $qryadmin->rowcount();
	//Check whether the query was successful or not
	if($countadmin > 0) {
		//Login Successful
		session_regenerate_id();
		$rowadmin = $qryadmin->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowadmin['aid'];
		session_write_close();
		header("location:admin/index.php");
		exit();
	}
	$qryhospital = $db->prepare("SELECT * FROM hospital WHERE username='$username' AND password='$password' AND typ='hospital' AND stat='approve'");
	$qryhospital->execute();
	$counthospital = $qryhospital->rowcount();
	//Check whether the query was successful or not
	if($counthospital > 0) {
		//Login Successful
		session_regenerate_id();
		$rowhospital = $qryhospital->fetch();
		$_SESSION['SESS_HOSPITAL_ID'] = $rowhospital['hid'];
		session_write_close();
		header("location:hospital/index.php");
		exit();
	}
	$qrydoctor = $db->prepare("SELECT * FROM doctor WHERE username='$username' AND password='$password' AND typ='doctor' AND stat='approve'");
	$qrydoctor->execute();
	$countdoctor = $qrydoctor->rowcount();
	//Check whether the query was successful or not
	if($countdoctor > 0) {
		//Login Successful
		session_regenerate_id();
		$rowdoctor = $qrydoctor->fetch();
		$_SESSION['SESS_DOCTOR_ID'] = $rowdoctor['dcoid'];
		session_write_close();
		header("location:doctor/index.php");
		exit();
	}
	$qrypharmacy = $db->prepare("SELECT * FROM pharmacy WHERE username='$username' AND password='$password' AND typ='pharmacy' AND stat='approve'");
	$qrypharmacy->execute();
	$countpharmacy = $qrypharmacy->rowcount();
	//Check whether the query was successful or not
	if($countpharmacy > 0) {
		//Login Successful
		session_regenerate_id();
		$rowpharmacy = $qrypharmacy->fetch();
		$_SESSION['SESS_PHARMACY_ID'] = $rowpharmacy['phid'];
		session_write_close();
		header("location:pharmacy/index.php");
		exit();
	}
	$qrylaboratory = $db->prepare("SELECT * FROM laboratory WHERE username='$username' AND password='$password' AND typ='lab' AND stat='approve'");
	$qrylaboratory->execute();
	$countlaboratory = $qrylaboratory->rowcount();
	//Check whether the query was successful or not
	if($countlaboratory > 0) {
		//Login Successful
		session_regenerate_id();
		$rowlaboratory = $qrylaboratory->fetch();
		$_SESSION['SESS_LABORATORY_ID'] = $rowlaboratory['labid'];
		session_write_close();
		header("location:laboratory/index.php");
		exit();
	}
	$qrypatient = $db->prepare("SELECT * FROM patient WHERE username='$username' AND password='$password' AND typ='patient'");
	$qrypatient->execute();
	$countpatient = $qrypatient->rowcount();
	//Check whether the query was successful or not
	if($countpatient > 0) {
		//Login Successful
		session_regenerate_id();
		$rowpatient = $qrypatient->fetch();
		$_SESSION['SESS_PATIENT_ID'] = $rowpatient['patid'];
		session_write_close();
		header("location:patient/index.php");
		exit();
	}
	else 
	{
		//Login failed
		echo "<script>alert('Check your username and password and try again.'); window.location='index.php'</script>";
		exit();
	}
?>

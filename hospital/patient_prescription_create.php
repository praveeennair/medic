<?php

	session_start();
	include('../connect/db.php');
	$hid=$_SESSION['SESS_HOSPITAL_ID'];
	$resulth = $db->prepare("select * from hospital where hid='$hid'");
	$resulth->execute();
	for($i=0; $rowh = $resulth->fetch(); $i++)
	{	
		$hname=$rowh["name"];	
	}

		$uniqno=$_POST["uniqno"];
		$result = $db->prepare("select * from  patient where uniqno='$uniqno'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
		{
			$uniqno=$row["uniqno"];
			$name=$row["name"];
			$aadhar=$row["aadhar"];
			$bgrp=$row["bgrp"];			
		}
?>
<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SID</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">


</head>
<body>
<?php 
	include("include/leftpanel.php"); ?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
<?php include("include/header.php"); ?>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Patient</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                  <form class="form-control" method="post" action="patient_prescription_create_save.php" autocomplete="off">
                    <div class="card">
                      <div class="card-header"><strong>Patient</strong><small> Prescription</small></div>
                      <div class="card-body card-block">
                       
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Patient Id</label>
                        <input type="text" id="Brand" name="uniqno" class="form-control" value="<?php echo $uniqno?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Name</label>
                        <input type="text" id="Brand" name="name" class="form-control" value="<?php echo $name?>" readonly>
                        </div>
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Aadhar No</label>
                        <input type="text" id="Brand" name="aadhar" class="form-control" value="<?php echo $aadhar?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Blood Group</label>
                        <input type="text" id="Brand" name="bgrp" class="form-control" value="<?php echo $bgrp?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Hospital</label>
                        <input type="text" id="Brand" name="hname" class="form-control" value="<?php echo $hname?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Doctor</label>
                         <select class="form-control" name="doctor" required>
                         	<option value="">Select</option>
                            <?php
								$result = $db->prepare("select * from doctor where hname='$hname'");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++)
								{
									echo"<option>".$row["name"]."</option>";	
								}
							?>
                         </select>
                        </div>
                         <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <label for="company" class=" form-control-label">Deseases</label>
                        <textarea class="form-control" name="deseases" rows="4" required></textarea>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Prescription</label>
                        <textarea class="form-control" name="prescri" rows="4" required></textarea>
                        </div>
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Laboratory Check Up</label>
                        <textarea class="form-control" name="labchk" rows="4" required></textarea>
                        </div>                                                                    
                    </div>
                  
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-md pull-right">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>                       
                      </div>
                    </div>
					</form>
                
			</div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>

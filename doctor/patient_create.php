<?php
	session_start();
	include('../connect/db.php');
	$dcoid=$_SESSION['SESS_DOCTOR_ID'];
	$result = $db->prepare("select * from doctor where dcoid='$dcoid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$dcoid = $row['dcoid'];
		$name=$row["name"];		
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
                  <form class="form-control" method="post" action="patient_save.php" autocomplete="off">
                    <div class="card">
                      <div class="card-header"><strong>Patient</strong><small> Information</small></div>
                      <div class="card-body card-block">
                       
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Doctor Name</label>
                        <input type="text" id="Brand" name="hname" class="form-control" value="<?php echo $name?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Name</label>
                        <input type="text" id="Brand" name="name" class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Gender</label>
                        	<select name="sex" class="form-control" required>
                        		<option value="">--SELECT--</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                        	</select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Date Of Birth</label>
                        <input type="date" id="Brand" name="dob" class="form-control" required max="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Address</label>
                        <textarea class="form-control" name="addr" rows="1" required></textarea>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Contact No</label>
                        <input type="text" id="Brand" name="cntno" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Aadhar No</label>
                         <input type="text" id="Brand" name="aadhar" class="form-control" required maxlength="12" minlength="12">
                        </div>    
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Email</label>
                        <input type="email" id="Brand" name="email" class="form-control" required>
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Emergency Contact</label>
                        <input type="text" id="Model" name="ecntno" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Relationship</label>
                        <input type="text" id="Model" name="relsp" class="form-control" required>
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Glood Group</label>
                        	<select name="bgrp" class="form-control" required>
                                <option value="">Blood Group</option>
                                <option>A +ve</option>
                                <option>B +ve</option>
                                <option>AB +ve</option>
                                <option>O +ve</option>
                                <option>A -ve</option>
                                <option>B -ve</option>
                                <option>AB -ve</option>
                                <option>O -ve</option>
                            </select>
                        </div>  
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Username</label>
                        <input type="text" id="Model" name="username" class="form-control" required>
                        </div>   
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Password</label>
                        <input type="password" id="Model" name="password" class="form-control" required>
                        </div> 
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Description</label>
                        <textarea class="form-control" name="des" rows="1" required></textarea>
                        </div>                                                                     
                    </div>
                  
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-md pull-right">
                          <i class="fa fa-dot-circle-o"></i> Create
                        </button>
                        <button type="reset" class="btn btn-danger btn-md pull-right">
                          <i class="fa fa-ban"></i> Reset
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

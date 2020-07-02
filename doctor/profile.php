<?php
	 session_start();
	 include('../connect/db.php');
	 $dcoid=$_SESSION['SESS_DOCTOR_ID'];
	 $result = $db->prepare("select * from  doctor where dcoid='$dcoid'");
	 $result->execute();
	 for($i=0; $row = $result->fetch(); $i++)
		{
			 $name = $row['name'];
			 $hname = $row['hname'];
			 $sex = $row['sex'];
			 $dob = $row['dob'];
			 $email = $row['email'];
			 $addr = $row['addr'];
			 $cntno = $row['cntno'];
			 $qual = $row['qual'];
			 $special = $row['special'];
			 $file = $row['file'];
			 $exp = $row['exp'];							 
		}
?>
<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College Way</title>
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
                        <h1>Doctor</h1>
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
                  <form class="form-control" method="post" action="profile_update.php" enctype="multipart/form-data">
                    <div class="card">
                      <div class="card-header"><strong>Doctor</strong><small> Information</small></div>
                      <div class="card-body card-block">
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Hospital</label>
                         <input type="hidden" name="dcoid"  value="<?php echo $dcoid?>">
                        <input type="text" id="Brand" name="hname" class="form-control" value="<?php echo $hname?>">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Name</label>
                        <input type="text" id="Brand" name="name" class="form-control" value="<?php echo $name?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Gender</label>
                        <input type="text" id="Brand" name="sex" class="form-control" value="<?php echo $sex?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Date Of Birth</label>
                        <input type="text" id="Brand" name="dob" class="form-control" value="<?php echo $dob?>" readonly>
                        </div>
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Email</label>
                        <input type="email" id="Model" name="email" class="form-control" value="<?php echo $email?>">
                        </div>  
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Address</label>
                        <input type="text" id="Model" name="addr" class="form-control" value="<?php echo $addr?>">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Contact No</label>
                        <input type="text" id="Model" name="cntno" class="form-control" value="<?php echo $cntno?>">
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Qualification</label>
                        <input type="text" id="Model" name="qual" class="form-control" value="<?php echo $qual?>">
                        </div>    
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Specialization</label>
                        <input type="text" id="Model" name="special" class="form-control" value="<?php echo $special?>">
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">License</label>
                        <a href="<?php echo $file?>" target="_blank" class="btn btn-block btn-primary">Download</a>
                        </div> 
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Experience</label>
                        <input type="text" id="Model" name="exp" class="form-control" value="<?php echo $exp?>">
                        </div>                                                                                       
                    </div>
                  
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-md pull-right">
                          <i class="fa fa-dot-circle-o"></i> Update
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

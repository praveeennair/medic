<?php
	 $hid=$_GET["hid"];
	 include('../connect/db.php');
	 $result = $db->prepare("select * from  hospital where hid='$hid'");
	 $result->execute();
	 for($i=0; $row = $result->fetch(); $i++)
		{
			 $name = $row['name'];
			 $type = $row['type'];
			 $addr = $row['addr'];
			 $accredat = $row['accredat'];
			 $hregno = $row['hregno'];
			 $file = $row['file'];
			 $npersoname = $row['npersoname'];
			 $tnonper = $row['tnonper'];
			 $npersonem = $row['npersonem'];
			 $emno = $row['emno'];
			 $ambno = $row['ambno'];
			 $blbnkno = $row['blbnkno'];
			 $helpno = $row['helpno'];
			 $website = $row['website'];
			 $eyear = $row['eyear'];
			 $speciali = $row['speciali'];
			 $facili = $row['facili'];						 
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
                        <h1>Hospital</h1>
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
                  <form class="form-control">
                    <div class="card">
                      <div class="card-header"><strong>Information</strong></div>
                      <div class="card-body card-block">	                                	
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Name</label>
                        <input type="text" id="Brand" name="name" class="form-control" value="<?php echo $name?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Type</label>
                         <input type="text" id="Brand" name="name" class="form-control" value="<?php echo $type?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Accreditation(For e.g NABH/NABL/JCI/ISO/Others)</label>
                        <textarea class="form-control" name="accredat" readonly><?php echo $accredat?></textarea>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Address</label>
                        <textarea class="form-control" name="addr" readonly><?php echo $addr?></textarea>
                        </div>                        
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Hospital Registration Number </label>
                        <input type="text" id="Brand" name="hregno" class="form-control" value="<?php echo $hregno?>" readonly>
                        </div>
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Registration Number Scanned Copy</label>
                        <a href="<?php echo $file?>" target="_blank" class="btn btn-block btn-primary">Download</a>
                        </div>  
                    </div>
                    
                    <div class="card">
                      <div class="card-header"><strong>For Office Use Only (This information will not be shared publicly)</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Nodal Person for this Information - Name and Designation</label>
                            <input type="text" id="Brand" name="npersoname" class="form-control" value="<?php echo $npersoname?>" readonly>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Telephone Number of the Nodal Person for this Information</label>
                            <input type="text" id="Brand" name="tnonper" class="form-control" value="<?php echo $tnonper?>" readonly>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Nodal Person Email Id</label>
                            <input type="text" id="Brand" name="npersonem" class="form-control" value="<?php echo $npersonem?>" readonly>
                            </div>
                        </div>
                    </div>
                    
                   <div class="card">
                      <div class="card-header"><strong>Contact / Help Desk of Hospital (For Public Domain)</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Emergency Number</label>
                            <input type="text" id="Brand" name="emno" class="form-control" value="<?php echo $emno?>" readonly>
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Ambulance Phone No</label>
                            <input type="text" id="Brand" name="ambno" class="form-control" value="<?php echo $ambno?>" readonly>
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Blood Bank Phone No</label>
                            <input type="text" id="Brand" name="blbnkno" class="form-control" value="<?php echo $blbnkno?>" readonly>
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Helpline</label>
                            <input type="text" id="Brand" name="helpno" class="form-control" value="<?php echo $helpno?>" readonly>
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Website</label>
                            	<a href="<?php echo $website?>" target="_blank" class="btn btn-block btn-info"><?php echo $website?></a>	
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Established Since (Year)</label>
                            <input type="text" id="Brand" name="eyear" class="form-control" value="<?php echo $eyear?>" readonly>
                            </div>
                        </div>
                    </div>
                    
                   <div class="card">
                      <div class="card-header"><strong>Further Details</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Specialities</label>
                            <input type="text" id="Brand" name="speciali" class="form-control" value="<?php echo $speciali?>" readonly>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Facilities</label>
                            <input type="text" id="Brand" name="facili" class="form-control" value="<?php echo $facili?>" readonly>
                            </div>                           
                        </div>
                    </div>                                      
                    <div class="card-footer">
                        <a href="hospital_view.php" class="btn btn-success btn-md pull-right">
                          <i class="fa fa-dot-circle-o"></i> Back
                        </a>                      
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

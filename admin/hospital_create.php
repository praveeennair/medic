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
                  <form class="form-control" method="post" action="hospital_save.php" autocomplete="off" enctype="multipart/form-data">
                    <div class="card">
                      <div class="card-header"><strong>Information</strong></div>
                      <div class="card-body card-block">	                                	
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Name</label>
                        <input type="text" id="Brand" name="name" class="form-control" required pattern="[a-zA-Z1 _]{3,50}"> 
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Type</label>
                         <select name="type" class="form-control" required>
                         		<option value="">Select</option>
                                <option>Government </option>
                                <option>Private </option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Accreditation(For e.g NABH/NABL/JCI/ISO/Others)</label>
                        <textarea class="form-control" name="accredat" required></textarea>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="vat" class=" form-control-label">Address</label>
                        <textarea class="form-control" name="addr" required></textarea>
                        </div>                        
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Hospital Registration Number </label>
                        <input type="text" id="Brand" name="hregno" class="form-control" required>
                        </div>
                         <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Registration Number Scanned Copy</label>
                        <input type="file" id="Brand" name="file" class="form-control" required>
                        </div>  
                    </div>
                    
                    <div class="card">
                      <div class="card-header"><strong>For Office Use Only (This information will not be shared publicly)</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Nodal Person for this Information - Name and Designation</label>
                            <input type="text" id="Brand" name="npersoname" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Telephone Number of the Nodal Person for this Information</label>
                            <input type="text" id="Brand" name="tnonper" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Nodal Person Email Id</label>
                            <input type="email" id="Brand" name="npersonem" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                   <div class="card">
                      <div class="card-header"><strong>Contact / Help Desk of Hospital (For Public Domain)</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Emergency Number</label>
                            <input type="text" id="Brand" name="emno" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Ambulance Phone No</label>
                            <input type="text" id="Brand" name="ambno" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Blood Bank Phone No</label>
                            <input type="text" id="Brand" name="blbnkno" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Helpline</label>
                            <input type="text" id="Brand" name="helpno" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Website</label>
                            <input type="url" id="Brand" name="website" class="form-control" required>
                            </div>
                             <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Established Since (Year)</label>
                            <input type="text" id="Brand" name="eyear" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                   <div class="card">
                      <div class="card-header"><strong>Further Details</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Specialities</label>
                            <input type="text" id="Brand" name="speciali" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Facilities</label>
                            <input type="text" id="Brand" name="facili" class="form-control" required>
                            </div>                           
                        </div>
                    </div>
                    
                    <div class="card">
                      <div class="card-header"><strong>Authentication</strong></div>
                        <div class="card-body card-block">	                                	
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Username</label>
                            <input type="text" id="Brand" name="username" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                            <label for="company" class=" form-control-label">Password</label>
                            <input type="password" id="Brand" name="password" class="form-control" required>
                            </div>
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

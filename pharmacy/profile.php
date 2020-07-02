<?php
	 session_start();
	 include('../connect/db.php');
	 $phid=$_SESSION['SESS_PHARMACY_ID'];
	 $result = $db->prepare("select * from  pharmacy where phid='$phid'");
	 $result->execute();
	 for($i=0; $row = $result->fetch(); $i++)
		{
			 $name = $row['name'];
			 $type = $row['type'];
			 $addr = $row['addr'];
			 $cntno = $row['cntno'];
			 $liceno = $row['liceno'];
			 $file = $row['file'];
			 $dateofe = $row['dateofe'];							 
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
                        <h1>Pharmacy</h1>
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
                  <form class="form-control" method="post" action="profile_update.php" enctype="multipart/form-data" autocomplete="off">
                    <div class="card">
                      <div class="card-header"><strong>Create</strong></div>
                      <div class="card-body card-block">
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Name of Pharmacy</label>
                        <input type="hidden"  name="phid" value="<?php echo $phid?>">
                        <input type="text" id="Brand" name="name" class="form-control" value="<?php echo $name?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Type(Hospital/Private)</label>
                        <input type="text" id="Brand" name="type" class="form-control" value="<?php echo $type?>">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Address</label>
                        <input type="text" id="Brand" name="addr" class="form-control" value="<?php echo $addr?>">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Contact No</label>
                        <input type="text" id="Brand" name="cntno" class="form-control" value="<?php echo $cntno?>">
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Licencee Name</label>
                        <input type="text" id="Brand" name="licenam" class="form-control" value="<?php echo $liceno?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Pharmacy Licence</label>
                        <a href="<?php echo $file?>" target="_blank" class="btn btn-block btn-primary">Download</a>
                        </div>
                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label for="company" class=" form-control-label">Date Of Establishment</label>
                        <input type="text" id="Brand" name="dateofe" class="form-control" value="<?php echo $dateofe?>" readonly>
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

<?php
	session_start();
	include('../connect/db.php');
	$patid=$_SESSION['SESS_PATIENT_ID'];
	$result = $db->prepare("select * from patient where patid='$patid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
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
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

</head>
<body>
        <!-- Left Panel -->
<?php 
	include("include/leftpanel.php"); 
	?>
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
         
           <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <p class="text-light"><b>Hospital</b></p>
                        <hr>
                         <h4 class="mb-0">
                            <span class="count">
                             <?php 
							   $result = $db->prepare("select count(*) from hospital");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++)
								{
									echo"".$row['count(*)']."";
								}
							?>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <p class="text-light"><b>Pharmacy</b></p>
                        <hr>
                         <h4 class="mb-0">
                            <span class="count">
							<?php 
							   $result = $db->prepare("select count(*) from pharmacy");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++)
								{
									echo"".$row['count(*)']."";
								}
							?>
                       </span>
                        </h4>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                           <p class="text-light"><b>Laboratry</b></p>
                           <hr>
                           <h4 class="mb-0">
                            <span class="count">
							   <?php 
							   $result = $db->prepare("select count(*) from laboratory");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++)
								{
									echo"".$row['count(*)']."";
								}
							?>
                       		</span>
                        </h4>
                        </div>
                    </div>
                </div>
                
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                       <div class="page-title" style="font-family: Hoefler Text, Liberation Serif, Times, Times New Roman, serif">
                        		<h5><b>Hospitals</b></h5>
                        		<br>
                    		</div>
                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12  table-responsive">
                        <table class="table" style="font-family:Hoefler Text, Times, Times New Roman">
                       		<thead>
                              <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Person</th>
                                <th>Contact No</th>
                                <th>Email </th>
                                <th>Document</th>
                                <th>Date</th>                    
                                <th>Action</th>
                              </tr>
                            </thead>
                             <tbody>
                                <?php
                                    $result = $db->prepare("select * from  hospital");
                                    $result->execute();
                                    for($i=0; $row = $result->fetch(); $i++)
                                        {
                                        $hid = $row['hid'];
                                        echo"<tr>";
                                        echo"<td>".$row["name"]."</td>";
                                        echo"<td>".$row["type"]."</td>";
                                        echo"<td>".$row["npersoname"]."</td>";
                                        echo"<td>".$row["emno"]."</td>";
                                        echo"<td>".$row["npersonem"]."</td>";
                                        echo"<td><a href='".$row["file"]."' target='_blank'>Download</a></td>";
                                        echo"<td>".$row["dat"]."</td>";
                                        ?>
                                        <td>
                                        <a href="index_more.php<?php echo '?hid='.$hid; ?>" class=" btn btn-sm btn-info">&nbsp;More</a>
                                        </td>
                                        <?php
                                        echo"</tr>";
                                        }
                                ?>
                            </tbody>
                          </table>   
                       </div><!--/.row-->
                    </div>
                </div>
            </div>
</div>
           

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>

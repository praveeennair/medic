<?php
	session_start();
	include('../connect/db.php');
	$patid=$_SESSION['SESS_PATIENT_ID'];
	$result = $db->prepare("select * from patient where patid='$patid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$name=$row["name"];	
		$uniqno=$row["uniqno"];	
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
<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="assets/scss/style.css">
</head>
<body>
<!-- Left Panel -->
<?php 
	include("include/leftpanel.php"); 
?>
<div id="right-panel" class="right-panel">
  <header id="header" class="header">
    <?php include("include/header.php"); ?>
  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
          <h1>Laboratory</h1>
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header"> <strong class="card-title">Laboratory Information </strong> </div>
            <div class="card-body container" style="width:100% !important; overflow:auto !important;">
             <table id="bootstrap-data-table" class="table table-striped table-bordered text-uppercase">
                <thead>
                    <tr>
                    	<th>Date</th>
                        <th>Hospital</th>
                        <th>Doctor</th>
                        <th>Lab</th>
                        <th>Deseases</th>    
                        <th>Description</th>
                        <th>Download</th>
                        <th>Amount</th>
                    </tr>
                 </thead>
                <tbody>
					<?php
						$tot=0;
                        $result = $db->prepare("select * from laboratoryamount where uniqno='$uniqno'");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++)
                        {	
						echo "<tr>";
						echo "<td>".$row["dat"]."</td>";  
						echo "<td>".$row["hname"]."</td>";  
						echo "<td>".$row["doctor"]."</td>";  
						echo "<td>".$row["lname"]."</td>";  
						echo "<td>".$row["deseases"]."</td>"; 
						echo "<td>".$row["des"]."</td>";                                    
						echo "<td><a href='".$row["file"]. "' target='_blank'>Download</a></td>";
						$tot=$tot+$row["amount"];
						echo "<td>".$row["amount"]."</td>";
						echo "</tr>";
                        }						
                    ?>  
                </tbody>
              </table>    
                <div class="row">
                    <div class="col-lg-12">
                             <div class="card">
                                <div class="card-header"><strong>Bill Amount</strong></div>
                                    <div class="card-body card-block">
                                     	<div class="form-group col-sm-6 col-md-6 col-lg-6">
                                        <label for="company" class=" form-control-label">Total Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $tot?>" readonly>
                                        </div>                                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-md pull-right" onClick="window.print() ">
                                            <i class="fa fa-print"></i> Print
                                        </button>                       
                                    </div>
                                </div>
                            </div>                  
                    </div>
                </div>          
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- .animated -->        
  </div>
  <!-- .content --> 
  
</div>
<!-- /#right-panel --> 

<!-- Right Panel --> 
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script> 
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/plugins.js"></script> 
<script src="assets/js/main.js"></script> 
<script src="assets/js/lib/data-table/datatables.min.js"></script> 
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script> 
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script> 
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script> 
<script src="assets/js/lib/data-table/jszip.min.js"></script> 
<script src="assets/js/lib/data-table/pdfmake.min.js"></script> 
<script src="assets/js/lib/data-table/vfs_fonts.js"></script> 
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script> 
<script src="assets/js/lib/data-table/buttons.print.min.js"></script> 
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script> 
<script src="assets/js/lib/data-table/datatables-init.js"></script> 
<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
      
</body>
</html>

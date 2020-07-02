<?php
	include('../connect/db.php');
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header"> <strong class="card-title">Patient Laboratory Information </strong> </div>
            <div class="card-body container" style="width:100% !important; overflow:auto !important;">
             <table id="bootstrap-data" class="table table-striped table-bordered text-uppercase">
                 <thead>
                    <tr>
                    	<th>Date</th>
                        <th>Patient</th>
                        <th>Hospital</th>
                        <th>Doctor</th>
                        <th>Lab</th>
                        <th>Deseases</th>                       
                        <th>Description</th>
                        <th>Download</th>
                    </tr>
                 </thead>
                <tbody>
					<?php
						$uniqno=$_POST["uniqno"];
                        $result = $db->prepare("select * from laboratoryamount where uniqno='$uniqno' order by laboratryid desc limit 1");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++)
                        {	
						echo "<tr>";
						echo "<td>".$row["dat"]."</td>";  
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["hname"]."</td>";  
						echo "<td>".$row["doctor"]."</td>";  
						echo "<td>".$row["lname"]."</td>";  
						echo "<td>".$row["deseases"]."</td>"; 
						echo "<td>".$row["des"]."</td>";                                    
						echo "<td><a href='".$row["file"]. "' target='_blank'>Download</a></td>";
						echo "</tr>";
                        }						
                    ?>  
                </tbody>
              </table>           
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
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
    
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data').DataTable();
        } );
    </script>
</body>
</html>

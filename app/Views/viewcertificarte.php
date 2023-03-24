<!doctype html>
<html lang="en">
<head>
    <?= $this->include('partials/head-css') ?>
	<?php
$session = session();
$username = $session->get('username');
if($username == "sabeer")
{
	?>
<style>
body {
  background-image: url("<?php echo base_url();?>/public/assets/images/saleem.png");
    background-size:   cover;    
    background-repeat: no-repeat;
    background-position: center center; 
	visibility: visible;
}
@page {
  size: A4;
  margin: 5;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
}
</style>
<?php
}
else if($username =="shafeed")
{
	
	?>
	<style>
body {
  background-image: url("<?php echo base_url();?>/public/assets/images/saleems.png");
    background-size:   cover;    
    background-repeat: no-repeat;
    background-position: center center; 
	visibility: visible;
}
@page {
  size: A4;
  margin: 5;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
}
</style>
<?php
}
else
{
	?>
<style>
body {
  background-image: url("<?php echo base_url();?>/public/assets/images/sabeer.png");
    background-size:   cover;    
    background-repeat: no-repeat;
    background-position: center center; 
	visibility: visible;
}
@page {
  size: A4;
  margin: 5;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
}
</style>
<?php
}
?>
</head>

<body>
<!-- Begin page -->
<div id="layout-wrapper">
<!-- ============================================================== -->
    <!-- Start right Content here -->
                <div class="row">
                    <div class="col-lg-12">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-end font-size-16"> <img src="<?php echo base_url();?>/public/assets/images/logo-dark.png" alt="logo" height="100" /><span class="badge bg-success font-size-12 ms-2"></span></h4>
                                    <div class="mb-4">
                                       <br>
                                       <br>
                                       <br>
									   <?php
$db = db_connect(); 
$query = $db->query('select * from certificates ORDER BY certificate_id DESC LIMIT 1');
foreach ($query->getResultArray() as $row) {
	$certificate_id = $row['certificate_id'];
	$date = $row['date'];
	$bank = $row['bank'];
	$price = $row['price'];
	$car_maker = $row['car_maker'];
	$model = $row['model'];
	$year = $row['year'];
	$color = $row['color'];
	$interior = $row['interior'];
	$transmission = $row['transmission'];
	$chassis_no = $row['chassis_no'];
	$engine_no = $row['engine_no'];
	$specification = $row['specification'];
	$odometer = $row['odometer'];
	$conditions = $row['conditions'];
	$department = $row['department'];
}
//echo $certificate_id;
?>
                                    </div>
                                    <div class="text-muted">
                                       <span style="font-size:110%;">Ser # AP<?php echo $date;?><?php echo $certificate_id;?></span>
									   <br>
                                       <span style="font-size:110%;">Date : <?php echo $date;?></span>
									   <br>
                                        <span style="font-size:110%;">To, The Manager</span>
										<br>
                                        <span style="font-size:110%;"><?php echo $department;?> - <?php echo $bank;?></span>
                                    </div>
                                </div>
                              <br>
							  <center><h1><ins>EVALUATION CERTIFICATE</ins></h1></center>
                                <div class="row">
                                    <div class="col-sm-12">
                                       <p style="font-size:150%;"><i>We have evaluated the following vehicle for a price of AED <?php echo $price;?> ( <?php $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo $f->format((int) $price);
?> AED Only)</i></p>
                                    </div>
                                </div>


                                <div class="py-2">
                                    <h4><ins>The Detail of which are as followings:</ins></h4>

                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-centered mb-0">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 200px; font-size:16px;">Car Maker (Brand)</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $car_maker;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Model</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $model;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Year of Make</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $year;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Color</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $color;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Interior</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $interior;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Transmission</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $transmission;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;">Chassis No</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $chassis_no;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;">Engine No</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $engine_no;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Specification</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $specification;?></th>
													<th></th>
                                                </tr>
												<tr>
                                                    <th style="width: 200px;font-size:16px;">Odometer</th>
                                                    <th style="width: 30px;font-size:16px;">:</th>
                                                    <th style="width: 200px;font-size:16px;"><?php echo $odometer;?></th>
													<th style="width: 200px;font-size:16px;"><?php echo $conditions;?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
									<div class="row">
                                    <div class="col-sm-12">
                                       <p style="font-size:150%;"><i>The above mentioned vehicle details and evaluation price is given on client request. Autoplus will not be responsible if any amendment made.</i></p>
                                    </div>
                                    </div>
									 <?php
$session = session();
$username = $session->get('username');
if($username == "sabeer")
{
	?>
 <span style="font-size:100%;">Shabeer Ali - 0507888637</span><br>
<span style="font-size:100%;"></span>
<?php
}
else if($username =="shafeed")
{
	
	?>
	 <span style="font-size:100%;">Mohamed Shafeed - 057038223</span><br>
	 <span style="font-size:100%;"></span>
<?php
}
else
{
	?>
 <span style="font-size:100%;">Muhammad Ali Alhanbali - 0504537280</span><br>
 <span style="font-size:100%;"></span>
<?php
}
?>
                                    <div class="d-print-none mt-4">
                                        <div class="float-end">
                                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
											<a href="<?php echo base_url();?>/panel" class="btn btn-primary w-md waves-effect waves-light">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </div>
    </div>
</body>
</html>
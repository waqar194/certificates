<!doctype html>
<html lang="en">

<head>
    <!-- bootstrap-datepicker css -->
    <link href="<?php echo base_url();?>/public/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?php echo base_url();?>/public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url();?>/public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<body data-layout="horizontal" data-topbar="colored">

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/horizontal') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <a href="<?php echo base_url();?>/addnew" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add New Evaluation</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                <thead>
                                    <tr class="bg-transparent">
                                        
                                        <th>Ser No</th>
                                        <th>Date</th>
                                        <th>Bank</th>
                                        <th>Price</th>
                                        <th>Car Maker</th>
                                        <th>Car Model</th>
                                        <th>Year Of Making</th>
                                        <th>Color</th>
                                        <th>Chassis No</th>
                                        <th>Engine No</th>
                                        <th>View</th>
                                        <th style="width: 120px;">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    
									<?php
$db = db_connect(); 
$query = $db->query('select * from certificates');

foreach ($query->getResultArray() as $row) {
	?>
	<tr>
	<td>AP<?php echo $row['date']; ?><?php echo $row['certificate_id']; ?></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['bank']; ?></td>
	<td><?php echo $row['price']; ?> AED</td>
	<td><?php echo $row['car_maker']; ?></td>
	<td><?php echo $row['model']; ?></td>
	<td><?php echo $row['year']; ?></td>
	<td><?php echo $row['color']; ?></td>
	<td><?php echo $row['chassis_no']; ?></td>
	<td><?php echo $row['engine_no']; ?></td>

                                        <td>
                                            <a href="<?php echo base_url();?>/view/<?php echo $row['certificate_id']; ?>" class="btn btn-primary w-md waves-effect waves-light">View</a>
                                        </td>

                                        <td>
                                            <a href="<?php echo base_url();?>/edit/<?php echo $row['certificate_id']; ?>" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                        </td>
										  </tr>
											<?php
}
?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>/public/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Required datatable js -->
<script src="<?php echo base_url();?>/public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url();?>/public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/public/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- init js -->
<script src="<?php echo base_url();?>/public/assets/js/pages/ecommerce-datatables.init.js"></script>



</body>

</html>
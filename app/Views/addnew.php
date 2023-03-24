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
				<div class="col-12">
                        <div class="card">
                            <div class="card-body">
							 <form action="<?php echo base_url();?>/evsave" method="post" enctype="multipart/form-data">
                                <h4 class="card-title">Add New Evaluation Certificate</h4>
								<div class="mb-3 row">
                                    <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="date" id="example-date-input" name="date" data-date-format="DD MMMM YYYY">
                                    </div>
                                    <label class="col-md-2 col-form-label">Bank</label>
                                    <div class="col-md-4">
                                        <select class="form-select" name="bank">
                                            <option>Select</option>
                                            <option value="Emirates NBD Dubai UAE">Emirates NBD Dubai UAE</option>
                                            <option value="Abu Dhabi Commercial Bank (ADCB)">Abu Dhabi Commercial Bank (ADCB)</option>
                                            <option value="Dubai Islamic Bank">Dubai Islamic Bank</option>
                                            <option value="Standard Chartered">Standard Chartered</option>
                                            <option value="Abu Dhabi Islamic Bank (ADIB)">Abu Dhabi Islamic Bank (ADIB)</option>
                                            <option value="Mashreq Neo">Mashreq Neo</option>
                                            <option value="HSBC Middle East">HSBC Middle East</option>
                                            <option value="BNB Paribas Middle East">BNB Paribas Middle East</option>
                                            <option value="Citibank N.A">Citibank N.A</option>
                                            <option value="Royal Bank of Canada">Royal Bank of Canada</option>
                                            <option value="Credit Suisse AG">Credit Suisse AG</option>
                                            <option value="Arab African International Bank">Arab African International Bank</option>
                                            <option value="Habib Bank A.G. Zurich">Habib Bank A.G. Zurich</option>
                                            <option value="BanqueLibanaise Pour Le Commerce">BanqueLibanaise Pour Le Commerce</option>
                                            <option value="Emirates Islamic Bank UAE">Emirates Islamic Bank UAE</option>
                                            <option value="RAK Bank UAE">RAK Bank UAE</option>
                                            <option value="Fujairah Bank UAE">Fujairah Bank UAE</option>
                                            <option value="Sharjah Islamic bank">Sharjah Islamic bank</option>
                                            <option value="Arab United Bank UAE">Arab United Bank UAE</option>
                                            <option value="Bank Melli Iran UAE">Bank Melli Iran UAE</option>
                                        </select>
                                    </div>
                                    </div>
									<div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Price</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="price">
										 <strong>AED</strong>
                                    </div>

                                    <label for="example-text-input" class="col-md-2 col-form-label">Car Maker (Brand)</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="car_maker">
                                    </div>
                                </div>
								 <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Model</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="model">
                                    </div>
                                    <label for="example-text-input" class="col-md-2 col-form-label">Year</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="year">
                                    </div>
                                </div>
								 <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Color</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="color">
                                    </div>
                                    <label for="example-text-input" class="col-md-2 col-form-label">Interior</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="interior">
                                    </div>
                                </div>
								 <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Transmission</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="transmission">
                                    </div>
                                    <label for="example-text-input" class="col-md-2 col-form-label">Chassis No</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="chassis_no">
                                    </div>
                                </div>
								<div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Engine No</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="engine_no">
                                    </div>
                                    <label for="example-text-input" class="col-md-2 col-form-label">Specification</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="specification">
                                    </div>
                                </div>
								<div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Odometer</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="odometer">
                                    </div>
                                    <label for="example-text-input" class="col-md-2 col-form-label">Conditions</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="conditions">
                                    </div>
                                </div>
								<div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Department</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" id="example-text-input" name="department">
                                        <input class="form-control" type="hidden" id="example-text-input" name="users_id" value="<?php
$session = session();
echo $session->get('users_id');
?>">
                                    </div>
                                </div>
								<div class="mb-2 row">
								<div class="col-md-4">
                                     <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Save & Print</button>
									 </div>
                                </div>
								 </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
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
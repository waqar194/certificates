<!doctype html>
<html lang="en">
<head>
    <?= $this->include('partials/head-css') ?>

</head>

<body class="authentication-bg">


    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="/" class="mb-5 d-block auth-logo">
                            <img src="<?php echo base_url();?>/public/assets/images/logo-dark.png" alt="" height="100" class="logo logo-dark">
                            <img src="<?php echo base_url();?>/public/assets/images/logo-light.png" alt="" height="100" class="logo logo-light">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue</p>
                            </div>
                            <div class="p-2 mt-4">
							<?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                                <form action="<?php echo base_url();?>/auth" method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                                    </div>
                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p>© Auto Plus</p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <script src="<?php echo base_url();?>/public/assets/js/app.js"></script>

</body>

</html>
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
           
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php
$session = session();
echo $session->get('username');
?></span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?php echo base_url();?>/logout"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle"><?= lang('Sign out') ?></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/panel">
                                <i class="uil-home-alt me-2"></i> <?= lang('Dashboard') ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/addnew">
                                <i class="uil-home-alt me-2"></i> <?= lang('Add New Evaluation') ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>
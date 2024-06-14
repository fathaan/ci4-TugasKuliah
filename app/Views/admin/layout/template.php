<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Created by. alfathaannn</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets-admin') ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url('assets-admin') ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets-admin') ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets-admin') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets-admin') ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets-admin') ?>/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets-admin') ?>/css/vertical-layout-light/style.css">

    <!-- Material Icons CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= base_url('assets-admin') ?>/images/logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets-admin') ?>/images/logo-mini.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?= base_url('assets-admin') ?>/images/faces/face28.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?= base_url('logout') ?>">
                                <i class="ti-power-off text-danger"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>">
                            <i class="material-icons-sharp menu-icon">dashboard</i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('employee') ?>">
                            <i class="material-icons-sharp menu-icon">groups</i>
                            <span class="menu-title">Karyawan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penggajian') ?>">
                            <i class="material-icons-sharp menu-icon">request_quote</i>
                            <span class="menu-title">Penggajian</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('potongan') ?>">
                            <i class="material-icons-sharp menu-icon">content_cut</i>
                            <span class="menu-title">Potongan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tunjangan') ?>">
                            <i class="material-icons-sharp menu-icon">align_horizontal_center</i>
                            <span class="menu-title">Tunjangan</span>
                        </a>
                    </li>
                    <small>&nbsp;&nbsp;&nbsp;</small>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('account') ?>">
                            <i class="material-icons-sharp menu-icon">people</i>
                            <span class="menu-title">All Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout') ?>">
                            <i class="material-icons-sharp menu-icon">logout</i>
                            <span class="menu-title">Logout Account</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!--  I S I    C O N T E N T  ! -->
            <?= $this->renderSection('content') ?>
            <!--  E N D    C O N T E N T  ! -->


        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= base_url('assets-admin') ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets-admin') ?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets-admin') ?>/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets-admin') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets-admin') ?>/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets-admin') ?>/js/off-canvas.js"></script>
    <script src="<?= base_url('assets-admin') ?>/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets-admin') ?>/js/template.js"></script>
    <script src="<?= base_url('assets-admin') ?>/js/settings.js"></script>
    <script src="<?= base_url('assets-admin') ?>/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('assets-admin') ?>/js/dashboard.js"></script>
    <script src="<?= base_url('assets-admin') ?>/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <!-- choose one -->
    <!-- choose one -->

    <script>
        feather.replace();
    </script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>


    <script src="https://kit.fontawesome.com/a59b15b52c.js" crossorigin="anonymous"></script>
</body>

</html>
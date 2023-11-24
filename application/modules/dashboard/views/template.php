<!DOCTYPE html>
<html lang="ID">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title><?php echo $this->template->title ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/feather-icons/feather.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/themify-icons/themify-icons.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/line-awesome/css/line-awesome.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/vendors/jvectormap/jquery-jvectormap-2.0.3.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/css/app.min.css') ?>" rel="stylesheet" />

    <link href="<?php echo base_url("assets/vendors/jquery-easy-loading/dist/jquery.loading.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendors/sweetalert2/dist/sweetalert2.min.css") ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/vendors/jquery-easy-loading/dist/jquery.loading.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendors/sweetalert2/dist/sweetalert2.min.js") ?>"></script>


    <script type="text/javascript" charset="utf-8" async defer>
        function updateCSRF(value) {
            return $('input[name=csrf_myapp]').val(value);
        }
    </script>
    <?php $userdata = userdata(); ?>
</head>

<body>
    <div class="page-wrapper">
        <div class="content-wrapper">
            <!-- BEGIN: Sidebar-->

            <div class="page-sidebar custom-scroll" id="sidebar">
                <div class="sidebar-header">
                    <a class="sidebar-brand" href="<?php echo site_url('') ?>">Toko Lokal</a>
                    <span class="sidebar-points">
                        <span class="badge badge-success badge-point mr-2"></span>
                        <span class="badge badge-danger badge-point mr-2"></span>
                        <span class="badge badge-warning badge-point"></span>
                    </span>
                </div>
                <ul class="sidebar-menu metismenu">
                    <li class="heading"><span>MENU</span></li>
                    <?php
                    $arraymenu = array(
                        array(
                            'title' => 'Dashboard',
                            'url' => 'page/dashboard',
                            'icon' => 'fas fa-chart-line',
                        ),
                        array(
                            'title' => 'Data Produk',
                            'url' => 'page/data-produk',
                            'icon' => 'fas fa-luggage-cart',
                        ),
                        array(
                            'title' => 'Data Kategori',
                            'url' => 'page/data-kategori',
                            'icon' => 'fas fa-list',
                        ),
                    );

                    foreach ($arraymenu as $menu) {
                        $active         = (uri_string() == $menu['url']) ? 'mm-active' : false;
                    ?>
                        <li class="<?php echo $active; ?>">
                            <a href="<?php echo site_url($menu['url']) ?>">
                                <i class="<?php echo $menu['icon'] ?> mr-3"></i>
                                <span class="nav-label"><?php echo $menu['title'] ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="content-area">
                <!-- BEGIN: Header-->
                <nav class="navbar navbar-expand navbar-light fixed-top header">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link navbar-icon sidebar-toggler" id="sidebar-toggler" href="#"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-arrow d-inline-flex align-items-center" data-toggle="dropdown" href="#">
                                <span class="d-none d-sm-inline-block mr-2"><?php echo $userdata->user_fullname; ?></span>
                                <span class="position-relative d-inline-block">
                                    <img class="rounded-circle" src="<?php echo base_url('assets/user-black.png') ?>" alt="image" width="36" />
                                    <span class="badge-point badge-success avatar-badge"></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pt-0 pb-4" style="min-width: 280px;">
                                <div class="p-4 mb-4 media align-items-center text-white" style="background-color: #2c2f48;"><img class="rounded-circle mr-3" src="<?php echo base_url('assets/user-white.png') ?>" alt="image" width="55" />
                                    <div class="media-body">
                                        <h5 class="mb-1"><?php echo $userdata->user_fullname; ?></h5>
                                        <div class="font-13"><?php echo $userdata->username; ?></div>
                                    </div>
                                </div>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('page/profil') ?>">
                                    <i class="ft-user mr-3 font-18 text-muted"></i>Profil
                                </a>
                                <div class="dropdown-divider my-3"></div>
                                <div class="mx-4">
                                    <a class="btn btn-link p-0" href="javascript:" onclick="logout_confirm()">
                                        <span class="btn-icon"><i class="ft-power mr-2 font-18"></i>Keluar</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav><!-- END: Header-->
                <div class="page-content fade-in-up">
                    <?php echo $this->template->content ?>
                </div>
                <footer class="page-footer flexbox">
                    <div class="text-muted"><?php echo date('Y') ?> © <strong>Tokolokal</strong>. All rights reserved</div>
                </footer>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dinamicModals" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa-spin"></i> loading ...
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dinamicModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa-spin"></i> loading ...
                </div>
            </div>
        </div>
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Memuat Halaman<br>
            <small class="text-danger">Refresh Jika Ini Terlalu Lama</small>
        </div>
    </div>

    <script src="<?php echo base_url('assets/backend/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/metismenu/dist/metisMenu.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/chart.js/dist/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/apexcharts/dist/apexcharts.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/app.min.js') ?>"></script>
    
    <script>
        $("#dinamicModals").on("show.bs.modal", function(e) {
            var link = $(e.relatedTarget);
            $(this).find(".modal-body").load(link.attr("data-href"));
            $(this).find(".modal-title").text(link.attr("data-title"));
        });
        $("#dinamicModal").on("show.bs.modal", function(e) {
            var link = $(e.relatedTarget);
            $(this).find(".modal-body").load(link.attr("data-href"));
            $(this).find(".modal-title").text(link.attr("data-title"));
        });

        function logout_confirm() {
            Swal({
                title: 'Yakin ingin keluar sesi?',
                text: "Anda akan keluar dari sesi dan kembali ke halaman login!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout'
            }).then((result) => {
                if (result.value) {
                    location.href = '<?php echo site_url('authentication/logout') ?>';
                }
            })
        }
    </script>
</body>

</html>
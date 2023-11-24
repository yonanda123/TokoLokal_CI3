<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/parlo/parlo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2020 02:52:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TOKO LOKAL - PKL's Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/img/logo/TOKO-LOKAL-LOGO-FIX.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.min.css') ?>">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/icons.min.css') ?>">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/plugins.css') ?>">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">
    <!-- Modernizer JS -->
    <script src="<?php echo base_url('assets/frontend/js/vendor/modernizr-2.8.3.min.js') ?>"></script>

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
    <div class="wrapper">
        <header class="header-area sticky-bar">
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo pt-40">
                                <a href="<?php echo site_url('beranda') ?>">
                                    <img src="assets/frontend/img/logo/NAMEBOX-LOGO.png" style="width:150px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 ">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="angle-shape"><a href="<?php echo site_url('beranda') ?>">Home </a>
                                        </li>
                                        <li class="angle-shape"><a href="<?php echo site_url('shop') ?>"> Shop <span>new</span> </a>
                                            <ul class="submenu">
                                                <?php
                                                $getdata = $this->db->get('tb_kategori');
                                                foreach ($getdata->result() as $show) { ?>
                                                    <li><a href="<?php echo site_url($show->kategori_alias) ?>"><?php echo $show->kategori_name ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url('about') ?>"> About </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-right-wrap pt-40">
                                <div class="header-search">
                                    <a class="search-active" href="#"><i class="sli sli-magnifier"></i></a>
                                </div>
                                <div class="cart-wrap">
                                    <button class="icon-cart-active">
                                        <span class="icon-cart">
                                            <i class="sli sli-bag"></i>
                                            <span class="count-style"><?php echo $this->cart->total_items() ?></span>
                                        </span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <h4>Shoping Cart</h4>
                                        </div>
                                        <ul>
                                            <?php
                                            $subtotal = 0;
                                            $namabarang[] = "";
                                            foreach ($this->cart->contents() as $items) {
                                                $subtotal += $items['qty'] * $items['totalharga'];
                                            ?>
                                                <li class="single-shopping-cart">
                                                    <div class="shopping-cart-img">
                                                        <a href="#"><img alt="" src="<?php echo base_url('/assets/frontend/img/' . $items['img']) ?>"></a>
                                                        <div class="item-close">
                                                            <a href="javascript:void(0)" onclick="hapusdata('<?php echo $items['rowid'] ?>')"><i class="sli sli-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="#"><?php echo $items['name'] ?></a></h4>
                                                        <span><?php echo $items['qty'] ?> x Rp. <?php echo number_format($items['totalharga'], 0, ',', '.') ?></span>
                                                        <br>
                                                        <span>warna : <?php echo $items['warna'] ?></span>
                                                    </div>
                                                </li>
                                                <?php $namabarang[] =  $items['name']; 
                                                      $namabarang[] =  $items['qty'];
                                                      $namabarang[] =  $items['warna'];
                                                ?>
                                            <?php } ?>
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Total : <span class="shop-total">Rp. <?php echo number_format($subtotal, 0, ',', '.'); ?></span></h4>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover text-center">
                                                <?php
                                                $this->db->where('id', 1);
                                                $getdata = $this->db->get('tb_users');
                                                $data = 'user_phone';
                                                if ($getdata->num_rows() != 0) {
                                                    $datauser = $getdata->row(); ?>
                                                    <a class="default-btn" href="https://api.whatsapp.com/send?phone=+<?php echo indoformatku($datauser->user_phone) ?>&text=Apakah%20Produk%20ini%20tersedia%20<?php foreach ($namabarang as $barangcart) {
                                                                                                                                                                                                                    echo $barangcart . ',%20';
                                                                                                                                                                                                                } ?>">checkout</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function hapusdata(code) {
                        swal({
                            allowOutsideClick: false,
                            title: 'Apakah Anda Yakin',
                            text: "Produk Akan Dihapus Dari Keranjang Belanja!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            if (result.value) {

                                $.ajax({
                                        url: '<?php echo site_url('frontpage/hapuscart') ?>',
                                        type: 'post',
                                        dataType: 'json',
                                        data: {
                                            code: code,
                                            <?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'
                                        }
                                    })

                                    .done(function(data) {

                                        swal(
                                            data.header,
                                            data.message,
                                            data.type,
                                        ).then(function() {
                                            location.reload();

                                        });

                                    })
                            }
                        });
                    }
                </script>
                <!-- main-search start -->
                <div class="main-search-active">
                    <div class="sidebar-search-icon">
                        <button class="search-close"><span class="sli sli-close"></span></button>
                    </div>
                    <div class="sidebar-search-input">
                        <form>
                            <div class="form-search">
                                <input id="search" class="input-text" value="" placeholder="Search Now" type="search">
                                <button>
                                    <i class="sli sli-magnifier"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="assets/frontend/img/logo/.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">

                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="sli sli-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="sli sli-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="sli sli-magnifier"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="<?php echo site_url('beranda') ?>">Home</a></li>
                                <li class="menu-item-has-children "><a href="<?php echo site_url('shop') ?>">Shop</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo site_url('elektronik') ?>">Elektronik</a></li>
                                        <li><a href="shop-grid-fullwide.html">Properti</a></li>
                                        <li><a href="shop-grid-2-column.html">Fashion Pria</a></li>
                                        <li><a href="shop-grid-4-column.html">Fashion Wanita</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="<?php echo site_url('about') ?>">About</a></li>
                                <li class="menu-item-has-children "><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo site_url('beranda') ?>">Home</a></li>
                                        <li><a href="<?php echo site_url('shop') ?>">Shop</a></li>
                                        <li><a href="<?php echo site_url('about') ?>">About</a></li>
                                        <li><a href="<?php echo site_url('login') ?>">Login</a></li>
                                        <li><a href="<?php echo site_url('register') ?>">Register</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Account</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo site_url('login') ?>">Login/Registrer</a></li>
                                    </ul>
                                </li>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
            </div>
        </div>

        <?php echo $this->template->content ?>

        <footer class="footer-area pt-1">
            <div class="footer-bottom border-top-2 pt-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="copyright-2 pb-30">
                                <p>Copyright ©TokoLokal.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/frontend/img/product/quickview-l1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/frontend/img/product/quickview-l2.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/frontend/img/product/quickview-l3.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/frontend/img/product/quickview-l2.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/frontend/img/product/quickview-s1.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="assets/frontend/img/product/quickview-s2.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="assets/frontend/img/product/quickview-s3.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="assets/frontend/img/product/quickview-s2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Products Name Here</h2>
                                    <div class="product-details-price">
                                        <span>IDR 18.000 </span>
                                        <span class="old">IDR 20.000 </span>
                                    </div>
                                    <div class="pro-details-rating-wrap">
                                        <div class="pro-details-rating">
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </div>
                                        <span>3 Reviews</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-list">
                                        <ul>
                                            <li>- 0.5 mm Dail</li>
                                            <li>- Inspired vector icons</li>
                                            <li>- Very modern style </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                    <li class="gray"></li>
                                                    <li class="green"></li>
                                                    <li class="yellow"></li>
                                                    <li class="white"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pro-details-size">
                                            <span>Size</span>
                                            <div class="pro-details-size-content">
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                        <div class="pro-details-cart">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i class="sli sli-heart"></i></a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i class="sli sli-refresh"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>Categories :</span>
                                        <ul>
                                            <li><a href="#">Minimal,</a></li>
                                            <li><a href="#">Furniture,</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>Tag :</span>
                                        <ul>
                                            <li><a href="#">Fashion, </a></li>
                                            <li><a href="#">Furniture,</a></li>
                                            <li><a href="#">Electronic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All JS is here
============================================ -->

    <!-- jQuery JS -->
    <script src="<?php echo base_url('assets/frontend/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <!-- Popper JS -->
    <script src="<?php echo base_url('assets/frontend/js/popper.min.js') ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/frontend/js/bootstrap.min.js') ?>"></script>
    <!-- Plugins JS -->
    <script src="<?php echo base_url('assets/frontend/js/plugins.js') ?>"></script>
    <!-- Ajax Mail -->
    <script src="<?php echo base_url('assets/frontend/js/ajax-mail.js') ?>"></script>
    <!-- Main JS -->
    <script src="<?php echo base_url('assets/frontend/js/main.js') ?>"></script>
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


<!-- Mirrored from demo.hasthemes.com/parlo/parlo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2020 02:52:30 GMT -->

</html>
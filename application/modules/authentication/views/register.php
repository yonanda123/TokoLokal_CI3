
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/parlo/parlo/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2020 02:53:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Parlo - eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
   
</head>

<body>
<div class="wrapper">
    <header class="header-area sticky-bar">
        <div class="main-header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo pt-40">
                            <a href="index.html">
                                <img src="assets/frontend/img/logo/.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 ">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="angle-shape"><a href="<?php echo site_url('beranda') ?>">Home </a></li>
                                    <li class="angle-shape"><a href="<?php echo site_url('shop') ?>"> Shop <span>new</span> </a>
                                    <ul class="submenu">
                                            <li><a href="blog.html">Elektronik </a></li>
                                            <li><a href="blog-2-col.html">Fashion Pria </a></li>
                                            <li><a href="blog-3-col.html">Fashion Wanita </a></li>
                                            <li><a href="blog-right-sidebar.html">Perabot Rumah Tangga </a></li>
                                            <li><a href="blog-details.html">Otomotif </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('about') ?>"> About </a></li>
                                    <li class="angle-shape"><a href="#">Pages </a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo site_url('beranda') ?>">Home </a></li>
                                            <li><a href="<?php echo site_url('shop') ?>">Shop </a></li>
                                            <li><a href="<?php echo site_url('about') ?>">About </a></li>
                                            <li><a href="<?php echo site_url('login') ?>">Login/Register </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-right-wrap pt-40">
                            <div class="header-search">
                                <a class="search-active" href="#"><i class="sli sli-magnifier"></i></a>
                            </div>
                            <div class="setting-wrap">
                                <button class="setting-active">
                                    <i class="sli sli-settings"></i>
                                </button>
                                <div class="setting-content">
                                    <ul>
                                        <li>
                                            <h4>Account</h4>
                                            <ul>
                                                <li><a href="<?php echo site_url('login') ?>">Login/Register</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
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
                                    <li><a href="shop.html">Elektronik</a></li>
                                    <li><a href="shop-grid-2-column.html">Fashion Pria</a></li>
                                    <li><a href="shop-grid-4-column.html">Fashion Wanita</a></li>
                                    <li><a href="shop-grid-fullwide.html">Perabot Rumah Tangga</a></li>
                                    <li><a href="shop-right-sidebar.html">Otomotif</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="<?php echo site_url('about') ?>">About</a></li>
                            <li class="menu-item-has-children "><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('beranda') ?>">Home</a></li>
                                    <li><a href="<?php echo site_url('shop') ?>">Shop</a></li>
                                    <li><a href="<?php echo site_url('about') ?>">About</a></li>
                                    <li><a href="<?php echo site_url('login') ?>">Login/Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-curr-lang-wrap">
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">My Account <i class="sli sli-arrow-down"></i></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="<?php echo site_url('login') ?>">Login/Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="<?php echo site_url('beranda') ?>">Home</a>
                    </li>
                    <li>
                    <a href="<?php echo site_url('login') ?>">Login</a>
                    </li>
                    <li>
                    <a href="<?php echo site_url('register') ?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a  href="<?php echo site_url('login') ?>">
                                <h4> login </h4>
                            </a>
                            <a class="active" href="<?php echo site_url('register') ?>">
                                <h4> register </h4>
                            </a>
                        </div>         
                            <div id="lg2" class="tab-content">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <?php echo form_open_multipart('', 'id="simpanregister"'); ?>
                                            <input type="text" name="user_fullname" placeholder="Nama Lengkap">
                                            <div class="form-group">
                                                <select class="form-control form-control-rounded form-control-solid" name="user_picture">
                                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                                        <option>Laki - Laki</option>
                                                        <option>Perempuan</option>
                                                </select>
                                            </div>
                                            <textarea name="user_address" id="" cols="30" rows="10" placeholder="Alamat"></textarea>
                                            <input type="number" name="user_phone" placeholder="No Telepon">
                                            <input name="email" placeholder="Email" type="email">
                                            <input type="text" name="username" placeholder="Username">
                                            <input type="password" name="password" placeholder="Password">
                                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                                            <div class="button-box">
                                                <button type="submit" id="button1">Register</button>  
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area bg-paleturquoise">
        <div class="container">
            <div class="footer-top text-center pt-45 pb-45">
            </div>
        </div>
        <div class="footer-bottom border-top-1 pt-20">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="copyright text-center pb-20">
                            <p>Copyright ©TokoLokal.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
</div>










<!-- All JS is here
============================================ -->

<!-- jQuery JS -->


</body>


<!-- Mirrored from demo.hasthemes.com/parlo/parlo/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2020 02:53:31 GMT -->
</html>
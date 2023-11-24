    <div class="slider-area">
        <div class="slider-active-3 owl-carousel nav-style-3">
            <div class="single-slider slider-height-3 bg-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-2 slider-animated-1">
                                <h1 class="animated">Most Fashionable <br>Backpack .</h1>
                                <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="slider-btn">
                                    <a class="animated" href="<?php echo site_url('shop') ?>">Shop Now <i class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-3 slider-animated-1">
                                <img class="animated" src="assets/frontend/img/slider/slider-hm3-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height-3 bg-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-2 slider-animated-1">
                                <h1 class="animated">Most Fashionable <br>Backpack .</h1>
                                <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="slider-btn">
                                    <a class="animated" href="shop.html">Shop Now <i class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-3 slider-animated-1">
                                <img class="animated" src="assets/frontend/img/slider/slider-hm3-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area pt-100 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="single-banner mb-30 scroll-zoom">
                    <?php
                        $this->db->where('produk_id = 35');
                        $getdata = $this->db->get('tb_produk');
                        foreach ($getdata->result() as $show) { ?>
                        <a href="<?php echo site_url($show->produk_alias) ?>"><img class="animated" src="assets/frontend/img/banner/banner-12.png" alt=""></a>
                        <div class="banner-content-4 banner-position-8">
                            <h3>Mens Backpack</h3>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="banner-h3-wrap pl-100 scroll-zoom">
                       <div class="single-banner mb-130">
                       <?php
                            $this->db->where('produk_id = 34');
                            $getdata = $this->db->get('tb_produk');
                            foreach ($getdata->result() as $show) { ?>
                            <a href="<?php echo site_url($show->produk_alias) ?>"><img class="animated" src="assets/frontend/img/banner/banner-13.png" alt=""></a>
                            <div class="banner-content-4 banner-position-8">
                                <h3>Travel Bag</h3>
                            </div>
                        <?php } ?>
                        </div>
                        <div class="single-banner mb-30 scroll-zoom">
                        <?php
                            $this->db->where('produk_id = 33');
                            $getdata = $this->db->get('tb_produk');
                            foreach ($getdata->result() as $show) { ?>
                            <a href="<?php echo site_url($show->produk_alias) ?>"><img class="animated" src="assets/frontend/img/banner/banner-14.png" alt=""></a>
                            <div class="banner-content-4 banner-position-9">
                                <h3>Womens <br>Backpack</h3>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-150">
        <div class="container">
            <div class="section-title text-center pb-60">
                <h2>New Arrivals</h2>
                <p>Get the Best & Quality Products! Only in Tokolokal.web.id!  </p>
            </div>
            <div class="arrivals-wrap item-wrapper">
                <div class="ht-products row">
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom toggle-item-active col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <div class="ht-product-inner">
                            <?php
                                $this->db->where('produk_id = 39');
                                $getdata = $this->db->get('tb_produk');
                                foreach ($getdata->result() as $show) { ?>
                            <div class="ht-product-image-wrap">
                            <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:280px"></a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="<?php echo site_url($show->produk_alias) ?>"><?php echo $show->produk_nama ?></a></h4>
                                    <div class="ht-product-price">
                                    <?php 
                                        $diskon = ($show->produk_harga * $show->produk_diskon) / 100 ; 
                                    ?>
                                        <span class="new">Rp. <?php echo number_format($show->produk_harga - $diskon, 0, ',', '.') ?></span>
                                        <span class="old">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></span>
                                    </div>
                                    
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom toggle-item-active col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <div class="ht-product-inner">
                            <?php
                                $this->db->where('produk_id = 38');
                                $getdata = $this->db->get('tb_produk');
                                foreach ($getdata->result() as $show) { ?>
                            <div class="ht-product-image-wrap">
                            <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:280px"></a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="<?php echo site_url($show->produk_alias) ?>"><?php echo $show->produk_nama ?></a></h4>
                                    <div class="ht-product-price">
                                    <?php 
                                        $diskon = ($show->produk_harga * $show->produk_diskon) / 100 ; 
                                    ?>
                                        <span class="new">Rp. <?php echo number_format($show->produk_harga - $diskon, 0, ',', '.') ?></span>
                                        <span class="old">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></span>
                                    </div>
                                    
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom toggle-item-active col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <div class="ht-product-inner">
                            <?php
                                $this->db->where('produk_id = 37');
                                $getdata = $this->db->get('tb_produk');
                                foreach ($getdata->result() as $show) { ?>
                            <div class="ht-product-image-wrap">
                            <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:280px"></a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="<?php echo site_url($show->produk_alias) ?>"><?php echo $show->produk_nama ?></a></h4>
                                    <div class="ht-product-price">
                                    <?php 
                                        $diskon = ($show->produk_harga * $show->produk_diskon) / 100 ; 
                                    ?>
                                        <span class="new">Rp. <?php echo number_format($show->produk_harga - $diskon, 0, ',', '.') ?></span>
                                        <span class="old">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></span>
                                    </div>
                                    
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom toggle-item-active col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                        <div class="ht-product-inner">
                            <?php
                                $this->db->where('produk_id = 36');
                                $getdata = $this->db->get('tb_produk');
                                foreach ($getdata->result() as $show) { ?>
                            <div class="ht-product-image-wrap">
                            <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:280px"></a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="<?php echo site_url($show->produk_alias) ?>"><?php echo $show->produk_nama ?></a></h4>
                                    <div class="ht-product-price">
                                    <?php 
                                        $diskon = ($show->produk_harga * $show->produk_diskon) / 100 ; 
                                    ?>
                                        <span class="new">Rp. <?php echo number_format($show->produk_harga - $diskon, 0, ',', '.') ?></span>
                                        <span class="old">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></span>
                                    </div>
                                    
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="<?php echo site_url($show->produk_alias) ?>"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="show-more-btn text-center mt-10 toggle-btn">
                    <a href="<?php echo site_url('shop') ?>">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-feature mb-40">
                        <div class="feature-icon">
                            <img src="assets/frontend/img/icon-img/free-shipping.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Free Shipping</h4>
                            <p>Most product are free <br>shipping.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-4">
                    <div class="single-feature mb-40 pl-50">
                        <div class="feature-icon">
                            <img src="assets/frontend/img/icon-img/support.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Customer Support</h4>
                            <p>24x7 Customer Support</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="single-feature mb-40">
                        <div class="feature-icon">
                            <img src="assets/frontend/img/icon-img/security.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4>Secure Payment</h4>
                            <p>Most Secure Payment <br>for customer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- Modal end -->
</div>
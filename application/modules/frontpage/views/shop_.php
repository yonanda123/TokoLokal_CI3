<div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="<?php echo site_url('beranda') ?>">Home</a>
                    </li>
                    <li class="active">Shop </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="shop-top-bar">
                        <div class="select-shoing-wrap">
                            <div class="shop-select">
                                <select>
                                    <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option>
                                    <option value="">In stock</option>
                                </select>
                            </div>
                            <p>Showing 1–12 of 20 result</p>
                        </div>
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-toggle="tab">
                                <i class="sli sli-grid"></i>
                            </a>
                            <a href="#shop-2" data-toggle="tab">
                                <i class="sli sli-menu"></i>
                            </a>
                        </div>
                    </div>
                   
                    <div class="shop-bottom-area mt-35" >
                            <div class="row ht-products">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <?php $getdata = $this->db->get('tb_produk');
                                                     foreach ($getdata->result() as $show) { ?>
                                                    <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:300px"></a>
                                    <!--Product Start-->
                                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                        <div class="ht-product-inner">
                                            <div class="ht-product-image-wrap">
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ht-product-content">
                                                <div class="ht-product-content-inner">
                                                    <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal">Chair</a></div>
                                                    <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal">Demo Product Name</a></h4>
                                                    <div class="ht-product-price">
                                                        <span class="new">$60.00</span>
                                                        <span class="old">$80.00</span>
                                                    </div>
                                                </div>
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#" ></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ht-product-countdown-wrap">
                                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product End-->
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <?php $getdata = $this->db->get('tb_produk');
                                                     foreach ($getdata->result() as $show) { ?>
                                                    <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:300px"></a>
                                    <!--Product Start-->
                                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                        <div class="ht-product-inner">
                                            <div class="ht-product-image-wrap">
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ht-product-content">
                                                <div class="ht-product-content-inner">
                                                    <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal">Chair</a></div>
                                                    <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal"><?php echo $show->produk_nama ?></a></h4>
                                                    <div class="ht-product-price">
                                                        <span class="new">$60.00</span>
                                                        <span class="old">$80.00</span>
                                                    </div>
                                                </div>
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#" ></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ht-product-countdown-wrap">
                                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product End-->
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <?php $getdata = $this->db->get('tb_produk');
                                                     foreach ($getdata->result() as $show) { ?>
                                                    <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:300px"></a>
                                    <!--Product Start-->
                                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                        <div class="ht-product-inner">
                                            <div class="ht-product-image-wrap">
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ht-product-content">
                                                <div class="ht-product-content-inner">
                                                    <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal">Chair</a></div>
                                                    <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal">Demo Product Name</a></h4>
                                                    <div class="ht-product-price">
                                                        <span class="new">$60.00</span>
                                                        <span class="old">$80.00</span>
                                                    </div>
                                                </div>
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#" ></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ht-product-countdown-wrap">
                                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product End-->
                                    <?php } ?>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <?php $getdata = $this->db->get('tb_produk');
                                                     foreach ($getdata->result() as $show) { ?>
                                                    <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:300px"></a>
                                    <!--Product Start-->
                                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                        <div class="ht-product-inner">
                                            <div class="ht-product-image-wrap">
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ht-product-content">
                                                <div class="ht-product-content-inner">
                                                    <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal">Chair</a></div>
                                                    <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal">Demo Product Name</a></h4>
                                                    <div class="ht-product-price">
                                                        <span class="new">$60.00</span>
                                                        <span class="old">$80.00</span>
                                                    </div>
                                                </div>
                                                <div class="ht-product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                        <li><a href="#" ></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ht-product-countdown-wrap">
                                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product End-->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

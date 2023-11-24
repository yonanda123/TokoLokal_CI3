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
    <?php $getdata = $this->db->get('tb_produk');
                    foreach ($getdata->result() as $show) { ?>
                        <a data-href="<?php echo site_url('modal/admin/update-produk?code=' . $show->produk_code) ?>" data-title="Produk Update" data-remote="false" data-toggle="modal" data-target="#dinamicModal" data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-primary text-white" title="Produk Update">
                                    <i class="fa fa-edit"></i>
                                </a>
                    <?php } ?>
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
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row ht-products">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="ht-product-image"> <img src="assets/frontend/img/product/product-1.jpg" alt="Universal Product Style"> </a>
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
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal1" class="ht-product-image"> <img src="assets/frontend/img/product/product-2.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal1"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal1">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal1">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$90.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal1"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
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
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal2" class="ht-product-image"> <img src="assets/frontend/img/product/product-3.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal2">Chair</a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal2">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal2"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
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
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal3 class="ht-product-image"> <img src="assets/frontend/img/product/product-4.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal3"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal3">Clock</a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal3">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal3"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal4" data-toggle="modal" data-target="#exampleModal4" class="ht-product-image"> <img src="assets/frontend/img/product/product-5.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal4"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal4">Clock</a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal4">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$60.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal4"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#" ><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal5" data-toggle="modal" data-target="#exampleModal5" class="ht-product-image"> <img src="assets/frontend/img/product/product-6.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal5"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#" ><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal5">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal5">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal5"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal6"class="ht-product-image"> <img src="assets/frontend/img/product/product-7.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal6"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal6">Chair</a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal6">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$30.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal6"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal7" class="ht-product-image"> <img src="assets/frontend/img/product/product-8.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal7"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal7">Chair</a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal7">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$60.00</span>
                                                            <span class="old">$90.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal7"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal8" class="ht-product-image"> <img src="assets/frontend/img/product/product-6.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal8"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal8">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal8">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal8"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal9" class="ht-product-image"> <img src="assets/frontend/img/product/product-13.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal9"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal9">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal9">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal9"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal10" class="ht-product-image"> <img src="assets/frontend/img/product/product-12.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal10"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#" data-toggle="modal" data-target="#exampleModal10">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#" data-toggle="modal" data-target="#exampleModal10">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal10"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal10"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--Product Start-->
                                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="product-details.html" class="ht-product-image"> <img src="assets/frontend/img/product/product-14.jpg" alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#exampleModal11"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="product-details.html">
                                                    <img src="assets/frontend/img/product/product-list-1.jpg" alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk of Lorem Ipsum used since the McClintock, a Latin. It has roots in a piece of classical Latin literature from Tremm.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="product-details.html">
                                                    <img src="assets/frontend/img/product/product-2.jpg" alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal1"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk of Lorem Ipsum used since the McClintock, a Latin. It has roots in a piece of classical Latin literature from Tremm.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$50.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="product-details.html">
                                                    <img src="assets/frontend/img/product/product-3.jpg" alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal2"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk of Lorem Ipsum used since the McClintock, a Latin. It has roots in a piece of classical Latin literature from Tremm.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="product-details.html">
                                                    <img src="assets/frontend/img/product/product-4.jpg" alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal3"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk of Lorem Ipsum used since the McClintock, a Latin. It has roots in a piece of classical Latin literature from Tremm.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="product-details.html">
                                                    <img src="assets/frontend/img/product/product-5.jpg" alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal4"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk of Lorem Ipsum used since the McClintock, a Latin. It has roots in a piece of classical Latin literature from Tremm.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="product-details.html">
                                                    <img src="assets/frontend/img/product/product-6.jpg" alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal5"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="product-details.html">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk of Lorem Ipsum used since the McClintock, a Latin. It has roots in a piece of classical Latin literature from Tremm.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="pro-pagination-style text-center mt-30">
                            <ul>
                                <li><a class="prev" href="<?php echo site_url('shop') ?>"><i class="sli sli-arrow-left"></i></a></li>
                                <li><a class="active" href="<?php echo site_url('shop') ?>">1</a></li>
                                <li><a href="<?php echo site_url('shop_') ?>">2</a></li>
                                <li><a class="next" href="<?php echo site_url('shop_') ?>"><i class="sli sli-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                                    <img src="assets/frontend/img/product/product-1.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-1.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-1.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-1.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-2.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-2.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-2.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-2.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-3.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-3.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-3.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-3.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-4.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-4.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-4.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-4.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-5.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-5.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-5.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-5.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-7.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-7.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-7.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-7.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-8.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-8.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-8.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-8.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-6.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-13.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-13.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-13.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-13.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-12.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-12.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-12.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-12.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog">
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
                                    <img src="assets/frontend/img/product/product-14.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-14.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-14.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/frontend/img/product/product-14.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>IDR 18.000 </span>
                                    <span class="old">IDR 20.000 </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description-review-area pb-95">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8">
                                        <div class="description-review-wrapper">
                                            <div class="description-review-topbar nav">
                                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                                <a data-toggle="tab" href="#des-details3">Additional information</a>
                                            </div>
                                            <div class="tab-content description-review-bottom">
                                                <div id="des-details1" class="tab-pane active">
                                                    <div class="product-description-wrapper">
                                                        <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut, vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque sollicitudin.</p>
                                                        <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus, vel</p>
                                                    </div>
                                                </div>
                                                <div id="des-details3" class="tab-pane">
                                                    <div class="product-anotherinfo-wrapper">
                                                        <ul>
                                                            <li><span>Weight</span> 400 g</li>
                                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
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
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Modal end -->
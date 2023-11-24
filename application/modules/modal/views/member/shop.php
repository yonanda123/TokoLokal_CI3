<?php
$code = $this->input->get_post('code');

$this->db->where('produk_alias', $code);
$cekdata = $this->db->get('tb_produk');
if ($cekdata->num_rows() == 0) {
?>
    <center>Data Produk Tidak Ditemukan</center>
<?php
} else {
    $datakat = $cekdata->row();
?>    
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
<?php } ?>
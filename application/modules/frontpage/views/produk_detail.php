
            
    <div class="product-details-area pt-100 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-img">
                        <div class="zoompro-border zoompro-span">
                        <img src="<?php echo base_url('/assets/frontend/img/'. $produk->produk_gambar) ?>" style="width:600px">         <span><?php echo $produk->produk_diskon ?> %</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <?php echo form_open_multipart('', 'id="simpancart"'); ?>
                    <div class="product-details-content ml-30">
                        <input type="hidden" name="produk_code" value="<?php echo $produk->produk_code ?>">
                        <input type="hidden" name="produk_gambar" value="<?php echo $produk->produk_gambar ?>">
                        <h2><?php echo $produk->produk_nama ?></h2> 
                        <input type="hidden" name="produk_nama" value="<?php echo $produk->produk_nama ?>">
                        <input type="hidden" name="produk_diskon" value="<?php echo $produk->produk_diskon ?>">
                        <div class="product-details-price">
                        <?php 
                                $diskon = ($produk->produk_harga * $produk->produk_diskon) / 100 ; 
                            ?>
                            <span>Rp. <?php echo number_format($produk->produk_harga - $diskon, 0, ',', '.') ?></span>
                            <input type="hidden" name="produk_harga" value="<?php echo $produk->produk_harga ?>">
                            <span class="old">Rp. <?php echo number_format($produk->produk_harga, 0, ',', '.') ?></span>
                        </div>
                        <p><?php echo $produk->produk_deskripsi ?></p>
                        <div class="pro-details-size-color">
                            <div class="pro-details-color-wrap">
                                <span>Color</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li class="blue"><input type="radio" name="warna" value="blue"></li>
                                        <li class="maroon"><input type="radio" name="warna" value="maroon"></li>
                                        <li class="gray"><input type="radio" name="warna" value="gray"></li>
                                        <li class="green"><input type="radio" name="warna" value="green"></li>
                                        <li class="yellow"><input type="radio" name="warna" value="yellow"></li>
                                    </ul>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>.</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <!-- <input type="radio"  name="ukuran" value="S" ></li> -->
                                        <!-- <li><input type="radio" name="ukuran" value="M"></li>
                                        <li><input type="radio" name="ukuran" value="XL"></li>
                                        <li><input type="radio" name="ukuran" value="XL"></li>
                                        <li><input type="radio" name="ukuran" value="XXL"></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="number" name="qtybutton" value="1" >
                            </div>
                            <div class="pro-details-cart btn-hover">
                                <button type="submit" id="button1" class="btn btn-success btn-md">add to cart</button>
                                <button disabled type="button" id="button2" class="btn btn-success btn-md">add to cart</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-15">
    </div>
    <script>
         jQuery(document).ready(function($) {
                $('#button2').hide();
                $('#simpancart').submit(function(event) {
                    event.preventDefault();
                    $('#button1').hide();
                    $('#button2').show();

                    $.ajax({
                            url: '<?php echo site_url('frontpage/Frontpage/cart') ?>',
                            type: 'post',
                            dataType: 'json',
                            data: new FormData(this),
                            contentType: false, 
                            cache: false,
                            processData: false,
                        })
                        .done(function(data) {
                            updateCSRF(data.csrf_data);
                            if (data.status) {
                                    location.reload();
                                } else {
                                    $('#button1').show();
                                    $('#button2').hide();
                                }
                        })
                });
            });
    </script>
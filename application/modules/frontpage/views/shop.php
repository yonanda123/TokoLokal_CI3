
    <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-1 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <?php echo form_open_multipart('', 'id="tambahcart"'); ?>
                                <?php
                                    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_produk.produk_kategori');
                                    $this->db->join('tb_subkategori', 'tb_subkategori.subkategori_id = tb_produk.produk_subkategori');
                                    $getdata = $this->db->get('tb_produk');
                                    foreach ($getdata->result() as $show) { ?>
                                <div class="shop-list-wrap shop-list-mrg mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="product-list-img">
                                            <div class="product-details-img">
                                                <div class="zoompro-border zoompro-span">
                                                    <img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" style="width:300px">         <span><?php echo $show->produk_diskon ?> %</span>
                                                    </div>
                                                </div>
                                                <div class="product-quickview">
                                                    <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7 align-self-center">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="shop-list-content">
                                                        <h3><a href="<?php echo site_url($show->produk_alias) ?>"><?php echo $show->produk_nama ?></a></h3>
                                                            <span><?php echo $show->subkategori_name ?></span>
                                                        <div class="ht-product-list-price">
                                                        <?php 
                                                            $diskon = ($show->produk_harga * $show->produk_diskon) / 100 ; 
                                                        ?>
                                                            <span class="new">Rp. <?php echo number_format($show->produk_harga - $diskon, 0, ',', '.') ?></span>
                                                            <span class="old">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></span>
                                                        </div>
                                                        <div class="ht-product-list-action">
                                                        <a href="<?php echo site_url($show->produk_alias) ?>" class="ps-btn btn btn-block"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="shop-list-paragraph">
                                                        <p><?php echo $show->produk_deskripsi ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
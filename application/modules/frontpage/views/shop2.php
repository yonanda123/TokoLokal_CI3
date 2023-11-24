
    <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Shop List style 1</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <div id="shop-2" class="tab-pane active">
                            <?php
                                        $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_produk.produk_kategori');
                                        $this->db->join('tb_subkategori', 'tb_subkategori.subkategori_id = tb_produk.produk_subkategori');
                                        $this->db->where('produk_kategori', $kategori->kategori_id);
                                        $getdata = $this->db->get('tb_produk');
                                        foreach ($getdata->result() as $show) { ?>
                                <div class="shop-list-wrap shop-list-mrg mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5">
                                            <div class="product-list-img">
                                                <a href="<?php echo site_url($show->produk_alias) ?>" class="ht-product-image" ><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" alt="Universal Product Style" style="width:300px"></a>
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
                                                            <span class="new">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></span>
                                                        </div>
                                                        <div class="ht-product-list-action">
                                                        <?php echo anchor('Frontpage/tambah_ke_keranjang/' .$show->produk_id, '<div class="list-cart"><i class="sli sli-basket-loaded"></i> Add to Cart</div>') ?>
                                                            <a class="list-refresh" title="Add To Compare" href="#"><i class="sli sli-refresh"></i></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
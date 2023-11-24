<div class="page-heading">
    <div class="page-breadcrumb">
        <h1 class="page-title page-title-sep">New Produk</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
            <li class="breadcrumb-item">Produk</li>
            <li class="breadcrumb-item">New Produk</li>
        </ol>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php echo form_open_multipart('', 'id="simpanproduk"'); ?>
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" class="form-control form-control-rounded form-control-solid" name="produk_nama" value="<?php echo $produk->produk_nama ?>" />
        </div>
        <div class="form-group">
            <script type="text/javascript" src="<?php echo base_url('assets/vendors/tinymce/tinymce.min.js') ?>"></script>
            <label for="">Deskripsi Produk</label>
            <script>
                tinymce.init({
                    selector: '#textarea',
                    menubar: false,
                    statusbar: false,
                    toolbar: " undo redo | bold italic | numlist bullist",
                    plugins: "link lists code",
                });
            </script>
            <textarea id="textarea" name="produk_deskripsi" rows="20"><?php echo $produk->produk_deskripsi ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="number" class="form-control form-control-rounded form-control-solid" name="produk_harga" value="<?php echo $produk->produk_harga ?>">
        </div>
        <div class="form-group">
            <label for="">Produk Diskon</label>
            <input type="number" class="form-control form-control-rounded form-control-solid" name="produk_diskon" value="<?php echo $produk->produk_diskon ?>">
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control form-control-rounded form-control-solid" name="produk_stock" value="<?php echo $produk->produk_stock ?>">
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Kategori Produk</label>
                <select class="form-control form-control-rounded form-control-solid" name="produk_kategori" id="kategori_id" onchange="getsubkategori()">
                    <option selected disabled>Pilih Kategori</option>
                    <?php
                    $getkategori = $this->db->get('tb_kategori');
                    foreach ($getkategori->result() as $show) {
                        $selectedkat         = ($show->kategori_id == $produk->produk_kategori) ? 'selected' : false;

                    ?>
                        <option value="<?php echo $show->kategori_id ?>" <?php echo $selectedkat; ?>><?php echo $show->kategori_name ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6 mt-2">
                <br>
                <select class="form-control form-control-rounded form-control-solid " name="produk_subkategori" id="subkategori_id">
                <option selected disabled>Pilih Kategori</option>
                    <?php 
                    $this->db->where('subkategori_id', $produk->produk_subkategori);
                    $getsubkategori = $this->db->get('tb_subkategori');
                    foreach ($getsubkategori->result() as $subkategori) { 
                        $selectedsubkat         = ($subkategori->subkategori_id == $produk->produk_subkategori) ? 'selected' : false;    
                    ?>
                        <option value="<?php echo $subkategori->subkategori_id ?>" <?php echo $selectedsubkat; ?>><?php echo $subkategori->subkategori_name ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Gambar Produk</label>
                <br>
                <input type="file" name="gambar_produk" size="20" style="width:100px" value="<?php echo $produk->produk_gambar ?>" />
            </div>
            <div class="col-md-6 mt-2">
                <img src="<?php echo base_url('/assets/frontend/img/' . $produk->produk_gambar) ?>" style="width:100px">
            </div>
        </div>
        <input type="hidden" name="produk_code" value="<?php echo $produk->produk_code ?>"> 
        <br>
        <div class="form-group">
            <button type="submit" id="button1" class="btn btn-success btn-md">Simpan Artikel</button>
            <button disabled type="button" id="button2" class="btn btn-success btn-md">Simpan Artikel</button>
        </div>

        <?php echo form_close(); ?>
        <script>
            function getsubkategori() {
                var kategori_id = $('#kategori_id').val();
                $.ajax({
                    url: "<?php echo site_url('getdata/user_get/keloladata/getsubkategori') ?>",
                    type: "GET",
                    dataType: "json",
                    data: {
                        kategori_id: kategori_id,

                    }
                }).done(function(data) {
                    console.log('ewfsdf');
                    $('#subkategori_id').empty();
                    $.each(data.result, function(index, val) {
                        $('#subkategori_id').append('<option value="' + val.subkategori_id + '">' + val.subkategori_name + '</option>');
                    });
                });
            }
            jQuery(document).ready(function($) {
                $('#button2').hide();
                $('#simpanproduk').submit(function(event) {
                    event.preventDefault();
                    tinymce.triggerSave();
                    $('#button1').hide();
                    $('#button2').show();

                    $.ajax({
                            url: '<?php echo site_url('postdata/admin_post/Produk/updateproduk') ?>',
                            type: 'post',
                            dataType: 'json',
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                        })
                        .done(function(data) {

                            updateCSRF(data.csrf_data);
                            swal(
                                data.heading,
                                data.message,
                                data.type,
                            ).then(function() {
                                if (data.status) {
                                    location.href = "<?php echo site_url('page/data-produk') ?>";
                                } else {
                                    $('#button1').show();
                                    $('#button2').hide();
                                }
                            });

                        })

                });
            });
        </script>
    </div>
</div>
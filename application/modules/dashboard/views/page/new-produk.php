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
            <input type="text" class="form-control form-control-rounded form-control-solid" name="produk_nama" />
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
            <textarea id="textarea" name="produk_deskripsi" rows="20"></textarea>
        </div>
        <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="number" class="form-control form-control-rounded form-control-solid" name="produk_harga">
        </div>
        <div class="form-group">
            <label for="">Produk Diskon</label>
            <input type="number" class="form-control form-control-rounded form-control-solid" name="produk_diskon">
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control form-control-rounded form-control-solid" name="produk_stock">
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Kategori Produk</label>
                <select class="form-control form-control-rounded form-control-solid" name="produk_kategori" id="kategori_id" onchange="getsubkategori()">
                    <option selected disabled>Pilih Kategori</option>
                    <?php $getkategori = $this->db->get('tb_kategori');
                    foreach ($getkategori->result() as $show) { ?>
                        <option value="<?php echo $show->kategori_id ?>"><?php echo $show->kategori_name ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6 mt-2">
                <br>
                <select class="form-control form-control-rounded form-control-solid " name="produk_subkategori" id="subkategori_id">
                    <option selected disabled>Pilih Sub Kategori</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Gambar Produk</label>
                <br>
                <input type="file" name="gambar_produk" size="20" style="width:100px" id="preview_gambar" required/>
            </div>
            <div class="col-md-6 mt-2">
                <img src="assets/frontend/img/favicon.png" id="gambar_load" width="100px">
            </div>
        </div>

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
                            url: '<?php echo site_url('postdata/admin_post/Produk/newproduk') ?>',
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
            function bacaGambar(input) {
                if (input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#gambar_load').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#preview_gambar").change(function() {
                bacaGambar(this);
            });
        </script>
    </div>
</div>
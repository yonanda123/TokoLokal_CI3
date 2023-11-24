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
        <?php echo form_open_multipart('', 'id="editkategori"'); ?>

        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" class="form-control form-control-rounded form-control-solid" name="kategori_name" value="<?php echo $kategori->kategori_name ?>" />
        </div>
        
        
        <br>
        <div class="form-group">
        <button type="submit" id="button1" class="btn btn-success btn-md">Simpan Data</button>
            <button disabled type="button" id="button2" class="btn btn-success btn-md">Simpan Data</button>
        </div>

        <?php echo form_close(); ?>
        <script>
            jQuery(document).ready(function($) {
                $('#button2').hide();
                $('#editkategori').submit(function(event) { 
                    event.preventDefault();
                    $('#button1').hide();
                    $('#button2').show();
 
                    $.ajax({
                            url: '<?php echo site_url('postdata/admin_post/kategori/editkategori') ?>',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#editkategori').serialize(),

                        })
                        .done(function(data) {

                            updateCSRF(data.csrf_data);
                            swal(
                                data.heading,
                                data.message,
                                data.type,
                            ).then(function() {
                                if (data.status) {
                                    location.href = "<?php echo site_url('page/data-kategori') ?>";
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
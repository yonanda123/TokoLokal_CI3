<div class="page-heading">
    <div class="page-breadcrumb">
        <h1 class="page-title page-title-sep">New Customer</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
            <li class="breadcrumb-item">Customer</li>
            <li class="breadcrumb-item">New Customer</li>
        </ol>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php echo form_open_multipart('', 'id="simpancustomer"'); ?>
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control form-control-rounded form-control-solid" name="nama">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control form-control-rounded form-control-solid" name="jenis_kelamin">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option>Laki - Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">No.Telp</label>
            <input type="text" class="form-control form-control-rounded form-control-solid" name="no_telp">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control form-control-rounded form-control-solid" name="alamat">
        </div>
        <div class="form-group">
            <button type="submit" id="button1" class="btn btn-success btn-md">Simpan Data</button>
            <button disabled type="button" id="button2" class="btn btn-success btn-md">Simpan Data</button>
        </div>
        <?php echo form_close(); ?>
        <script>
            jQuery(document).ready(function($) {
                $('#button2').hide();
                $('#simpancustomer').submit(function(event) { 
                    event.preventDefault();
                    $('#button1').hide();
                    $('#button2').show();
 
                    $.ajax({
                            url: '<?php echo site_url('postdata/admin_post/customer/newcustomer') ?>',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#simpancustomer').serialize(),

                        })
                        .done(function(data) {

                            updateCSRF(data.csrf_data);
                            swal(
                                data.heading,
                                data.message,
                                data.type,
                            ).then(function() {
                                if (data.status) {
                                    location.href = "<?php echo site_url('page/data-customer') ?>";
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
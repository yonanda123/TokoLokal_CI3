<?php
$code = $this->input->get_post('code');

$this->db->where('produk_code', $code);
$cekdata = $this->db->get('tb_produk');
if ($cekdata->num_rows() == 0) {
?>
    <center>Data Produk Tidak Ditemukan</center>
<?php
} else {
    $datakat = $cekdata->row();
?>
    <?php echo form_open_multipart('', 'id="produk_formupdate"'); ?> 
    <input type="hidden" name="produk_code" value="<?php echo $code; ?>">
    <div class="form-group">
        <label for="">Nama Produk</label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Nama Produk" name="produk_nama" value="<?php echo $datakat->produk_nama ?>">
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea class="form-control" autocomplete="off" placeholder="Deskripsi" name="produk_deskripsi"><?php echo $datakat->produk_deskripsi ?></textarea>
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Harga" name="produk_harga" value="<?php echo $datakat->produk_harga ?>">
    </div>
    <div class="form-group">
        <label for="">Diskon</label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Diskon" name="produk_diskon" value="<?php echo $datakat->produk_diskon ?>">
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Stock" name="produk_stock" value="<?php echo $datakat->produk_stock ?>">
    </div>
    <div class="form-group">
        <label for="">Gambar Produk</label>
        <br>
        <img src="<?php echo base_url('/assets/frontend/img/'. $datakat->produk_gambar) ?>" style="width:100px">
        <br>
        <br>
        <input type="file" name="gambar_produk" size="20"  value="<?php echo $datakat->produk_gambar ?>"/>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success float-right">Simpan</button>
        <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Batal</button>
    </div>
    <?php echo form_close(); ?>
    <script type="text/javascript" charset="utf-8" async defer>
        $('#produk_formupdate').submit(function(event) {
            event.preventDefault();

            $.ajax({
                    url: '<?php echo site_url('postdata/admin_post/Produk/updateproduk') ?>',
                    type: 'POST',
                    dataType: 'json',
                    // data: $('#produk_formupdate').serialize(),
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
                        data.type
                    ).then(function() {
                        if (data.status) {
                            location.reload();
                        }
                    });

                })
        }); 
    </script>
<?php } ?>
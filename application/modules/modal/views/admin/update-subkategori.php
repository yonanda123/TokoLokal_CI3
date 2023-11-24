<?php
$code = $this->input->get_post('code');

$this->db->where('subkategori_kode', $code);
$cekdata = $this->db->get('tb_subkategori');
if ($cekdata->num_rows() == 0) {
?>
    <center>Data Kategori Tidak Ditemukan</center>
<?php
} else {
    $datakat = $cekdata->row();
?>
    <?php echo form_open('', 'id="kategori_formupdate"'); ?>
    <input type="hidden" name="subkategori_kode" value="<?php echo $code; ?>">
    <div class="form-group">
        <label for="">Nama Kategori</label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Nama SubKategori" name="subkategori_name" value="<?php echo $datakat->subkategori_name ?>">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success float-right">Simpan</button>
        <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Batal</button>
    </div>
    <?php echo form_close(); ?>
    <script type="text/javascript" charset="utf-8" async defer>
        $('#kategori_formupdate').submit(function(event) {
            event.preventDefault();

            $.ajax({
                    url: '<?php echo site_url('postdata/admin_post/kategori/updatesubkategori') ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: $('#kategori_formupdate').serialize(),
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
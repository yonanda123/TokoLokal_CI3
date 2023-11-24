<?php $this->template->title->set("Profil");
$userdata = userdata(); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card mb-4">
            <div class="card-body">
            <?php echo form_open('', 'id="change_whatsapp_form"'); ?>
                <h5 class="card-title text-primary">Profil</h5>
                <div class="form-group">
                    <label for="">Username</label>
                    <input disabled class="form-control" value="<?php echo $userdata->username ?>">
                </div>
                <!-- <div class="form-group">
                    <label for="">Nomer Whatsapp Lama</label>
                    <input type="text" name="current_whatsapp" class="form-control">
                </div> -->
                <div class="form-group">
                    <label for="">Nomer Whatsapp</label>
                    <input type="text" name="new_whatsapp" class="form-control" value="<?php echo $userdata->user_phone ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success">Update No WhatsApp</button>
                </div>
            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-primary">Keamanan</h5>
                <?php echo form_open('', 'id="change_password_form"'); ?>
                <div class="form-group">
                    <label for="">Kata Sandi Lama</label>
                    <input type="password" name="current_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kata Sandi Baru</label>
                    <input type="password" name="new_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ulangi Kata Sandi Baru</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success">Update Kata Sandi</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
    $('#change_password_form').submit(function(event) {
        event.preventDefault();

        $.ajax({
                url: '<?php echo site_url('postdata/admin_post/KelolaData/changePassword') ?>',
                type: 'POST',
                dataType: 'json',
                data: $('#change_password_form').serialize(),
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
    $('#change_whatsapp_form').submit(function(event) {
        event.preventDefault();

        $.ajax({
                url: '<?php echo site_url('postdata/admin_post/KelolaData/changeWhatsapp') ?>',
                type: 'POST',
                dataType: 'json',
                data: $('#change_whatsapp_form').serialize(),
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
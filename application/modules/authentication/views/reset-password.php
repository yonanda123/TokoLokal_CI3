<?php  
    $title              = "Lupa Password";
    $this->template->title->set( $title );
?>
<?php  echo form_open('', array('id' => 'form-reset-password','class' => 'sign-box') ); ?>
    <div class="sign-avatar">
        <img src="/assets/img/avatar-sign.png" alt="">
    </div>
    <header class="sign-title">Lupa Passwrod</header>
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" id="username" type="text" name="forgot_username"  placeholder="Username" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-rounded">Reset password</button>
    <p class="sign-note">Belum punya akun? <a href="<?php echo site_url('signup') ?>">Mendaftar Gratis</a></p>
<?php echo form_close(); ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#form-reset-password').submit(function(event) {
            event.preventDefault();

            swal({
                title: 'Apakah Anda Yakin?',
                text: "saya yakin username yang saya masukkan benar",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'KIRIM EMAIL'
            }).then((result) => {
                if (result.value) {
                    
                    $('body').loading();

                    $.ajax({
                        url: '<?php echo site_url('authentication/doResetPassword') ?>',
                        type: 'post',
                        dataType: 'json',
                        data: $('#form-reset-password').serialize(),
                    })
                    .done(function( result ) {
                        $('input[name=csrf_myapp]').val( result.csrf_data );
                        swal(
                            result.heading,
                            result.message,
                            result.type
                        );
                        
                        console.log( result );
                    })
                    .always(function() {
                        $('body').loading('stop');
                    });
                    

                }
            })
        });

    $(function() {
        $('#username').on('keypress', function(e) {
            if (e.which == 32) 
                return false;
        });
    });

    });

</script>   
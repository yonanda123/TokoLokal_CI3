<?php  
    $title              = "Reset Password Baru";
    $this->template->title->set( $title );
?>
<?php  echo form_open('', array('id' => 'form-reset-password','class' => 'sign-box') ); ?>
    <div class="sign-avatar">
        <img src="/assets/img/avatar-sign.png" alt="">
    </div>
    <header class="sign-title">Lupa Passwrod</header>
    <div class="form-group">
        <label>Password Baru</label>
        <input class="form-control" id="password" type="password" name="new_password"  placeholder="Password Baru" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label>Ulangi Password</label>
        <input class="form-control" id="password" type="password" name="confirm_password"  placeholder="Ulangi Password" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-rounded">Reset password</button>
    <center>
        <a class="ml-2" href="<?php echo site_url() ?>">Halaman Utama</a>
    </center>
<?php echo form_close(); ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#form-reset-password').submit(function(event) {
                    event.preventDefault();

                    swal({
                        title: 'Apakah Anda Yakin?',
                        text: "pastikan anda mengingat password yang baru",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Update Password'
                    }).then((result) => {
                        if (result.value) { 
                            
                            $('body').loading();

                            $.ajax({
                                url: '<?php echo site_url('authentication/submitNewPassword') ?>',
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
                                ).then( function(){

                                    if( result.status ){
                                        location.href = '/login';
                                    }

                                } );
                                
                                console.log( result );
                            })
                            .always(function() {
                                $('body').loading('stop');
                            });
                            

                        }
                    })
                });

            });
        </script>
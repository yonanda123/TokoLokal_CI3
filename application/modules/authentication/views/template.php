<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>TOKO LOKAL - Login and Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/img/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url("assets/authentication/css/separate/pages/login.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/authentication/css/lib/font-awesome/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/authentication/css/lib/bootstrap/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/authentication/css/main.css") ?>">

    <link href="<?php echo base_url("assets/vendors/jquery-easy-loading/dist/jquery.loading.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendors/sweetalert2/dist/sweetalert2.min.css") ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/backend/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url("assets/vendors/jquery-easy-loading/dist/jquery.loading.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/vendors/sweetalert2/dist/sweetalert2.min.js") ?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.min.css') ?>">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/icons.min.css') ?>">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/plugins.css') ?>">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">
    <!-- Modernizer JS -->
    <script src="<?php echo base_url('assets/frontend/js/vendor/modernizr-2.8.3.min.js') ?>"></script>

    <script type="text/javascript" charset="utf-8" async defer>
        function updateCSRF(value) {
            return $('input[name=csrf_myapp]').val(value);
        }
    </script>
</head> 

<body>
    <?php echo $this->template->content ?>
    <script type="text/javascript">
        function RestrictSpace() {
            if (event.keyCode == 32) {
                return false;
            }
        }
        jQuery(document).ready(function($) {
            $('#btnloading').hide();
            $('form').submit(function(event) {
                event.preventDefault();

                $('form').loading();
                $('#btnloading').show();
                $('#btnmasuk').hide();
                $.ajax({
                        url: '<?php echo site_url('postdata/public_post/auth/do_login') ?>',
                        type: 'post',
                        dataType: 'json',
                        data: $('form').serialize(),
                    })
                    .done(function(data) {

                        updateCSRF(data.csrf_data);

                        swal(
                            data.heading,
                            data.message,
                            data.type
                        ).then(function() {
                            if (data.status) {
                                location.href = data.url;
                            }
                        });

                    })
                    .always(function() {
                        $('form').loading('stop');
                        $('#btnloading').hide();
                        $('#btnmasuk').show();
                    });


            });

        });
        jQuery(document).ready(function($) {
                $('#button2').hide();
                $('#simpanregister').submit(function(event) {
                    event.preventDefault();
                    $('#button1').hide();
                    $('#button2').show();
 
                    $.ajax({
                            url: '<?php echo site_url('postdata/public_post/Auth/do_register') ?>',
                            type: 'POST',
                            dataType: 'json',
                            data: $('#simpanregister').serialize(),

                        })
                        .done(function(data) {

                            updateCSRF(data.csrf_data);
                            swal(
                                data.heading,
                                data.message,
                                data.type,
                            ).then(function() {
                                if (data.status) {
                                    location.href = "<?php echo site_url('login') ?>";
                                } else {
                                    $('#button1').show();
                                    $('#button2').hide();
                                }
                            });

                        })

                });
            });
    </script>
    <script src="<?php echo base_url("assets/authentication/js/lib/bootstrap/bootstrap.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/authentication/js/plugins.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/authentication/js/lib/match-height/jquery.matchHeight.min.js") ?>"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function() {
                setTimeout(function() {
                    $('.page-center').matchHeight({
                        remove: true
                    });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                }, 100); 
            });
        });
    </script>
    <script src="<?php echo base_url('assets/authentication/js/app.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <!-- Popper JS -->
    <script src="<?php echo base_url('assets/frontend/js/popper.min.js') ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/frontend/js/bootstrap.min.js') ?>"></script>
    <!-- Plugins JS -->
    <script src="<?php echo base_url('assets/frontend/js/plugins.js') ?>"></script>
    <!-- Ajax Mail -->
    <script src="<?php echo base_url('assets/frontend/js/ajax-mail.js') ?>"></script>
    <!-- Main JS -->
    <script src="<?php echo base_url('assets/frontend/js/main.js') ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Charity60</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<link href="<?php echo base_url('assets/vendors/jquery-easy-loading/dist/jquery.loading.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/vendors/sweetalert2/dist/sweetalert2.min.css') ?>" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/jquery-easy-loading/dist/jquery.loading.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/sweetalert2/dist/sweetalert2.min.js') ?>"></script>

	<script type="text/javascript" charset="utf-8" async defer>
        function updateCSRF( value ){
            return $('input[name=csrf_myapp]').val( value );
        }
    </script>
	<style type="text/css" media="screen">
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
    </style>
</head>
<body>
	<?php  echo form_open('', array('id' => 'register-form') ); ?>
	<input type="hidden" name="pin_code" value="<?php echo $upline->pin_code ?>">
	<div class="container mt-5">
		<center>
			<a href="<?php echo site_url('') ?>">
				<img src="<?php echo base_url('assets/logo.png') ?>" style="max-width: 300px" alt="charity60"/>
			</a>
		</center>
		<div class="card mt-4 mb-4">
	  		<div class="card">
	  			<div class="card-body">
		  			<div class="form-group">
						<label for="">Username Sponsor Anda Adalah</label>
						<input class="form-control" value="<?php echo $upline->username ?>" disabled>
					</div>
				</div>
	  			<h5 class="card-header">PIN & SERIAL</h5>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="">PIN</label>
								<input class="form-control" value="<?php echo $upline->pin_number ?>" disabled>
							</div>	
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="">SERIAL</label>
								<input class="form-control" value="<?php echo $upline->pin_serial ?>" disabled>
							</div>
						</div>
					</div>
			  	</div>
			</div>

			<div class="card">
				<h5 class="card-header">MEMBER INFORMASI</h5>
				<div class="card-body">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" autocomplete="off" placeholder="Username" onkeypress="return RestrictSpace()">
					</div>
					<div class="form-group">
						<label for="">Nama Lengkap</label>
						<input type="text" name="user_fullname" class="form-control" autocomplete="off" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<label for="">Hanphone / Whatsapp</label>
						<input type="number" name="user_phone" class="form-control" autocomplete="off" placeholder="Hanphone / Whatsapp">
					</div>
					<div class="form-group">
						<label for="">Alamat Email</label>
						<input type="email" name="email" class="form-control"  autocomplete="off"  onkeypress="return RestrictSpace()" placeholder="Alamat Email">
					</div>
					<div class="form-group">
						<label for="">Alamat Lengkap</label>
						<textarea name="user_address" class="form-control" placeholder="Alamat Lengkap"></textarea>
					</div>
			  	</div>
			</div>

			<div class="card">
				<h5 class="card-header">DATA BANK</h5>
				<div class="card-body">
					<div class="form-group">
						<label for="">Nama Bank</label>
						<input type="text" name="user_bank_name" class="form-control" autocomplete="off" placeholder="Nama Bank">
					</div>
					<div class="form-group">
						<label for="">Rekening Atas Nama</label>
						<input type="text" name="user_bank_account" class="form-control" autocomplete="off" placeholder="Rekening Atas Nama">
					</div>
					<div class="form-group">
						<label for="">Nomor Rekening</label>
						<input type="number" name="user_bank_number" class="form-control" autocomplete="off"  onkeypress="return RestrictSpace()" placeholder="Nomor Rekening">
					</div>
			  	</div>
			</div>

			<div class="card">
				<h5 class="card-header">KEAMANAN</h5>
				<div class="card-body">
					<div class="form-group">
						<label for="">PIN Transaksi</label>
						<input min="1" type="number" name="pin_transaksi" class="form-control" autocomplete="off" onkeypress="return RestrictSpace()" placeholder="PIN Transaksi">
					</div>
					<div class="form-group">
						<label for="">Kata Sandi</label>
						<input type="password" name="password" class="form-control" autocomplete="off" onkeypress="return RestrictSpace()" placeholder="Kata Sandi">
					</div>
					<div class="form-group">
						<label for="">Ulangi Kata Sandi</label>
						<input type="password" name="confirm_password" class="form-control" autocomplete="off" onkeypress="return RestrictSpace()" placeholder="Ulangi Kata Sandi">
					</div>
			  	</div>
			</div>
			<div class="mt-5 mb-5">
				<button type="submit" class="btn btn-lg btn-success btn-block">DAFTAR SEKARANG</button>
			</div>
	</div>
	<?php echo form_close(); ?>
	<script type="text/javascript">
		function RestrictSpace() {
            if (event.keyCode == 32) {
                return false;
            }
        }
	    jQuery(document).ready(function($) {
	        
	        $('form').submit(function(event) {
	            event.preventDefault();
	            
	            $('form').loading();

	            $.ajax({
	                url: '<?php echo site_url('postdata/public_post/auth/do_formregister') ?>',
	                type: 'post',
	                dataType: 'json',
	                data: $('form').serialize(),
	            })
	            .done(function( data ) {
	                
	                updateCSRF( data.csrf_data );
	                // grecaptcha.reset();
	                swal(
	                    data.heading,
	                    data.message,
	                    data.type
	                ).then( function(){
	                    if ( data.status ) {
	                        location.href='<?php echo site_url('login') ?>';
	                    }
	                });

	            })
	            .always(function() {
	                $('form').loading('stop');
	            });
	            

	        });

	    });
	</script>
</body>
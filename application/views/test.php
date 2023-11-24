<div class="card-body table-border-style">
	<?php 
	$activation_date 	= 'Belum Diaktivasi';

	$get_packages 			= $this->db->get('tb_packages');
	foreach ($get_packages->result() as $package) {

		$this->db->where('lending_package_id', $package->package_id);
		$this->db->where('lending_userid', userid() );
		$get_lending 		= $this->db->get('tb_lending');

		if ( $get_lending->num_rows() == 1 ) {

			$activation_data 	= $get_lending->row();
			$activation_date 	= $activation_data->lending_datestart;

			$button 	= '<span class="btn btn-success btn-xs">Aktif</span>';
		}else{
			$button 	= "<button type='button' name='proses'  data-source='direct' 
				data-packageID='$package->package_id' data-packageName='$package->package_name' 
				class='btn btn-warning btn-xs' id='buttonn'>
				AKTIVASI
			</button>
			<button disabled class='btn btn-success' id='loadingg'>
			<i class='fa fa-spinner fa-spin'></i> Loading...</button>


			";
		}

		$hari_ini_start 	= date('Y-m-d 00:00:00');
		$hari_ini_end 		= date('Y-m-d 23:59:59');

		$this->db->where('invoice_date_add BETWEEN "'.$hari_ini_start.'" AND "'.$hari_ini_end.'"');
		$this->db->where('invoice_package_id', $package->package_id);
		$this->db->where('invoice_status !=', 'terbayar');
		$this->db->where('invoice_user_id', userid() );
		$get_invoice 			= $this->db->get('tb_users_invoice');
		if( $get_invoice->num_rows() > 0 ){
			$button 			= '<a href="/tagihan" class="btn btn-danger btn-xs">PENDING</a>';
		}

		// $this->table->add_row(
		// 	$nomor++,
		// 	$package->package_name,
		// 	'Rp. '. number_format($package->package_range_start, 0, ',', '.'),
		// 	$activation_date,
		// 	$button
		// );

	}
	?>
	<div class="alert alert-success" role="alert">
	  Status anda adalah free member <?php echo $button ?>
	</div>

	<?php
		echo form_hidden('csrf_myapp', $this->security->get_csrf_hash() );
	?>
	<script type="text/javascript" charset="utf-8" async defer>
	jQuery(document).ready(function($) {
		$('#loadingg').hide();
		$('button[name=proses]').click(function(event) {

			var package_name = $(this).attr('data-packageName');
			var package_id 	= $(this).attr('data-packageID');
			var activation_source = $(this).attr('data-source');
			
			Swal({
				title: 'Apakah Anda yakin?',
				text: "Anda akan melakukan aktivasi " + package_name,
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yakin, Proses Sekarang !'
			}).then((result) => {
				if (result.value) {
					
					$('body').loading();
					$('#loadingg').show();
        			$('#buttonn').hide();
					$.ajax({
						url: '<?php echo site_url('postdata/user_post/activation/activate') ?>',
						type: 'post',
						dataType: 'json',
						data: {
							package_id: package_id,
							source: activation_source,
							csrf_myapp: $('input[name=csrf_myapp]').val(),
							package_name: package_name
						},
					})
					.done(function( data ) {
						updateCSRF( data.csrf_data );
						
						swal(
							data.heading,
							data.message,
							data.type
						).then( function(){

							if ( data.status ) {

								if(  activation_source == 'wallet_register' ){
									var redirect_to = '/aktivasi';
								}else{
									var redirect_to = '/tagihan?tagihanID=' + data.tagihanID;
								}

								location.href = redirect_to;

							}

						});

					})
					.always(function() {
						$('body').loading('stop');
						$('#loadingg').hide();
                    	$('#buttonn').show();
					});
					

				}
			})

		});
	});
</script>
</div>
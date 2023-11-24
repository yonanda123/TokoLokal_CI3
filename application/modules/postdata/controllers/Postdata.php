<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postdata extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->set_content_type('application/json');
	}
	
	function public_post( $filename = 'null', $function_name = 'null' )
	{
		
		try {
			$this->load->model('public_post/' . $filename );
			$result 	= $this->$filename->$function_name();
		} catch (Exception $e) {
			$result 	= [
				'status' 	=> false,
				'message'	=> 'invalid model'
			];
		}

		echo json_encode( $result );

	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/

	function user_post(  $filename = 'null', $function_name = 'null' )
	{

		$status 		= true;
		
		if( ! $this->ion_auth->logged_in() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}

		if ( ! $this->input->post() ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'Not allowed method !'
			];
		}

		if ( $status ) {
				
			try {
				$this->load->model('user_post/' . $filename );
				$result 	= $this->$filename->$function_name();
			} catch (Exception $e) {
				$result 	= [
					'status' 	=> false,
					'message'	=> 'invalid model'
				];
			}

		}

		echo json_encode( $result );


	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function admin_post(  $filename = 'null', $function_name = 'null' )
	{


		$status 		= true;

		if( ! $this->ion_auth->is_admin() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}
		
		if( ! $this->ion_auth->logged_in() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}

		if ( ! $this->input->post() ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'Not allowed method !'
			];
		}

		if ( $status ) {
			try {
				$this->load->model('admin_post/' . $filename );
				$result 	= $this->$filename->$function_name();
			} catch (Exception $e) {
				$result 	= [
					'status' 	=> false,
					'message'	=> 'invalid model'
				];
			}

		}
		echo json_encode( $result );
		
	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function accounting_post(  $filename = 'null', $function_name = 'null' )
	{


		$status 		= true;

		$user_group 	= $this->ion_auth->get_users_groups()->row();
		if ( $user_group->id != 7 ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}
		
		if( ! $this->ion_auth->logged_in() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}

		if ( ! $this->input->post() ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'Not allowed method !'
			];
		}

		if ( $status ) {
			try {
				$this->load->model('accounting_post/' . $filename );
				$result 	= $this->$filename->$function_name();
			} catch (Exception $e) {
				$result 	= [
					'status' 	=> false,
					'message'	=> 'invalid model'
				];
			}

		}
		echo json_encode( $result );
		
	}
	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function adminpanel_post(  $filename = 'null', $function_name = 'null' )
	{


		$status 		= true;

		$user_group 	= $this->ion_auth->get_users_groups()->row();
		if ( $user_group->id != 6 ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}
		
		if( ! $this->ion_auth->logged_in() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		}

		if ( ! $this->input->post() ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'Not allowed method !'
			];
		}

		if ( $status ) {
			try {
				$this->load->model('adminpanel_post/' . $filename );
				$result 	= $this->$filename->$function_name();
			} catch (Exception $e) {
				$result 	= [
					'status' 	=> false,
					'message'	=> 'invalid model'
				];
			}

		}
		echo json_encode( $result );
		
	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function cs_post(  $filename = 'null', $function_name = 'null' )
	{


		$status 		= true;

		if( ! $this->ion_auth->logged_in() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		} else{


			$user_group 	= $this->ion_auth->get_users_groups()->row();
			if ( $user_group->id != 5 ) {
				$status 	= false;
				$result 	= [
					'status' 	=> false,
					'message'	=> 'you not have permission to access this apis !'
				];
			}

		}
			
		

		if ( ! $this->input->post() ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'Not allowed method !'
			];
		}

		if ( $status ) {
			try {
				$this->load->model('cs_post/' . $filename );
				$result 	= $this->$filename->$function_name();
			} catch (Exception $e) {
				$result 	= [
					'status' 	=> false,
					'message'	=> 'invalid model'
				];
			}

		}

		echo json_encode( $result );
		
	}
	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function finance_post(  $filename = 'null', $function_name = 'null' )
	{


		$status 		= true;

		if( ! $this->ion_auth->logged_in() ){
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'you not have permission to access this apis !'
			];
		} else{


			$user_group 	= $this->ion_auth->get_users_groups()->row();
			if ( $user_group->id != 4 ) {
				$status 	= false;
				$result 	= [
					'status' 	=> false,
					'message'	=> 'you not have permission to access this apis !'
				];
			}

		}
			
	
		if ( ! $this->input->post() ) {
			$status 	= false;
			$result 	= [
				'status' 	=> false,
				'message'	=> 'Not allowed method !'
			];
		}

		if ( $status ) {
			try {
				$this->load->model('finance_post/' . $filename );
				$result 	= $this->$filename->$function_name();
			} catch (Exception $e) {
				$result 	= [
					'status' 	=> false,
					'message'	=> 'invalid model'
				];
			}

		}
		
		echo json_encode( $result );
		
	}

	// function konfirmasi_pembayaran() 
	// {

	// 	$data['status'] 	= true;
	// 	$data['csrf_data']	= $this->security->get_csrf_hash();

	// 	$config['upload_path'] 		= './assets/uploads/konfirmasi_pembayaran/';
	// 	$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
	// 	$config['max_size']  		= '999999999';
	// 	$config['max_width']  		= '999999999';
	// 	$config['max_height']  		= '999999999';
	// 	$this->load->library('upload', $config);
	// 	if ( ! $this->upload->do_upload('pembayaran_struk') ){
	// 		$data['status'] 	= false;
	// 		$data['message'] 	= $this->upload->display_errors();
	// 	}
	// 	//validate form
	// 	$this->form_validation->set_rules('pembayaran_bank_jenis', 'Nama Bank', 'required');
	// 	$this->form_validation->set_rules('pembayaran_atas_nama', 'Atas Nama Rekening', 'required');
	// 	$this->form_validation->set_rules('pembayaran_rekening', 'Nomor Rekening', 'required');
	// 	$this->form_validation->set_rules('pembayaran_nominal', 'Nominal Transfer', 'required|numeric|greater_than[0]');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$data['status'] 	= false;
	// 		$data['message'] 	= validation_errors(' ', '<br/>');
	// 	}

	// 	$this->db->where('invoice_code', post('invoice_code'));
	// 	$this->db->where('invoice_user_id', userid());
	// 	$this->db->where('invoice_status', 'menunggu pembayaran');
	// 	$cekinvoice   = $this->db->get('tb_users_invoice');
	// 	if($cekinvoice->num_rows() == 0){
	// 		$data['status'] 	= false;
	// 		$data['message'] 	= "Tagihan Tidak Ditemukan";
	// 	}


	// 	if ( $data['status'] ) {
			
	// 		$uploaded 			= $this->upload->data();
	// 		$invoice 			= $cekinvoice->row();
	// 		//tambah ke table pembayaran
	// 		$this->db->insert('tb_users_pembayaran', [
	// 			'pembayaran_invoice_id'  	=> $invoice->invoice_id,
	// 			'pembayaran_userid'  		=> userid(),
	// 			'pembayaran_uplineid'  		=> $invoice->invoice_user_upid,
	// 			'pembayaran_bank_jenis'  	=> post('pembayaran_bank_jenis'),
	// 			'pembayaran_atas_nama'  	=> post('pembayaran_atas_nama'),
	// 			'pembayaran_rekening'  		=> post('pembayaran_rekening'),
	// 			'pembayaran_nominal'  		=> post('pembayaran_nominal'),
	// 			'pembayaran_struk'  		=> $uploaded['file_name'],
	// 		]);

	// 		//update status menjadi diproses
	// 		$this->db->update('tb_users_invoice', [
	// 			'invoice_status'	=> 'diproses'
	// 		], [
	// 			'invoice_code'		=> post('invoice_code')
	// 		]);


	// 		//update user avatar
	// 		// $this->ion_auth->update( userid(), array('user_picture' => $uploaded['file_name']) );

	// 		$data['message'] 	= 'Bukti pembayaran akan segera di proses. Terimakasih!';
	// 		$data['heading'] 	= 'Berhasil';
	// 		$data['type'] 		= 'success';

	// 	}else {

	// 		$data['heading'] 	= 'Gagal';
	// 		$data['type'] 		= 'error';
	// 	}


	// 	echo json_encode( $data );
	// }

}
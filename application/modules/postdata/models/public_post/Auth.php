<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Model
{

	private static $data = [
		'status' 	=> true,
		'message' 	=> null,
		/*'csrf_data'	=> $this->security->get_csrf_hash()*/
	];

	function __construct()
	{
		parent::__construct();
		Self::$data['csrf_data'] 	= $this->security->get_csrf_hash();
	}

	function requestResetLink()
	{

		/* validating userdata */
		$userdata 		= userdata([
			'username'	=> post('username'),
			'email'	=> post('email'),
		]);

		if (!$userdata) {
			Self::$data['status'] 	= false;
			Self::$data['message'] 	= 'Invalid or not available your user information';
		}


		/* validate form */
		$this->form_validation->set_rules('username', 'your username', 'required');
		$this->form_validation->set_rules('email', 'your email', 'required');
		if ($this->form_validation->run() == false) {
			Self::$data['status'] 	= false;
			Self::$data['message'] 	= validation_errors(' ', '<br/>');
		}


		if (Self::$data['status']) {

			//update forgotten password code 
			$random_code 			= hash('sha256', random_string('numeric', 20));

			$this->ion_auth->update($userdata->id, [
				'forgotten_password_code'	=> $random_code
			]);

			Self::$data['heading']	= 'Success';
			Self::$data['message']	= 'System was sending to your email with new reset password link !';
			Self::$data['type']		= 'success';
		} else {

			Self::$data['heading']	= 'Failed';
			Self::$data['type']		= 'error';
		}

		return Self::$data;
	}


	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/

	function do_login()
	{
		// if($this->input->post('g-recaptcha-response')){
		// 	//Data Login Validate Database

		// }

		$do_login 					= $this->ion_auth->login(post('authentication_id'), post('authentication_password'), true);
		if (!$do_login) {
			Self::$data['status'] 	= false;
			Self::$data['message'] 	= $this->ion_auth->errors();
		}
		//validate form
		$this->form_validation->set_rules('authentication_id', 'Username', 'required');
		$this->form_validation->set_rules('authentication_password', 'Kata Sandi', 'required');
		// $this->form_validation->set_rules('captcha', 'security captcha', 'required');
		if ($this->form_validation->run() == false) {
			Self::$data['status'] 	= false;
			Self::$data['message'] 	= validation_errors(' ', '<br/>');
		}
		// $recaptcha = $this->input->post('g-recaptcha-response');
		// $response = $this->recaptcha->verifyResponse($recaptcha);
		// if ($response['success'] == false) {
		// 	Self::$data['status'] 	= false;
		// 	Self::$data['message'] 	= "Harap Validasikan Captcha";
		// }

		if (!$this->input->post()) {
			Self::$data['status'] 	= false;
			Self::$data['message'] 	= 'Method not allowed';
		}

		// Self::$data['status'] 	= false;
		// Self::$data['message'] 	= 'Sistem Dalam Pemeliharaan. Silakan Kembali Lagi Nanti!';

		if (Self::$data['status']) {

			// login success create session if admin
			$user_group 	= $this->ion_auth->get_users_groups()->row();
			$allowed_group_id 	= [1, 7];
			if (in_array($user_group->id, $allowed_group_id)) {
				$array = array(
					'admin_userid' => userid()
				);
				$this->session->set_userdata($array);
			}

			$user_group     = $this->ion_auth->get_users_groups()->row();
			if ($user_group->id == 1) {
				Self::$data['url'] 	= site_url('page/dashboard');
			} else {
				Self::$data['url'] 	= site_url('user/account');
			}

			Self::$data['message'] 	= 'Anda berhasil login. Klik OK untuk melanjutkan';
			Self::$data['heading'] 	= 'Login Berhasil.';
			Self::$data['type'] 	= 'success';
		} else {

			Self::$data['heading'] 	= 'Failed';
			Self::$data['type'] 	= 'error';
		}

		return Self::$data;
	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/

	function login_back_admin()
	{

		Self::$data['heading'] 		= 'Login Admin Berhasil';
		Self::$data['type']	 		= 'success';

		if (!$this->session->userdata('admin_userid')) {
			Self::$data['status'] 		= false;
			Self::$data['message'] 		= 'Not allowed';
		}

		if (Self::$data['status']) {

			//update status
			$array = array(
				'user_id' => $this->session->userdata('admin_userid')
			);
			$this->session->set_userdata($array);
			Self::$data['message']	= 'Berhasil login kembali menjadi menjadi Admin';
		} else {

			Self::$data['heading'] 		= 'Failed';
			Self::$data['type']	 		= 'error';
		}

		return Self::$data;
	}


	function do_register()
	{
		// VALIDASI FILD AGAR TIDAK KOSONG 
		$this->form_validation->set_rules('user_fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('user_picture', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('user_address', 'Alamat', 'required');
		$this->form_validation->set_rules('user_phone', 'No Telepon', 'required');
		$this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[4]|is_unique[tb_users.username]', array(
			'is_unique'	=> 'Username ini telah digunakan. Mohon untuk menggunakan username lain'
		));
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[6]|max_length[25]');
		$this->form_validation->set_rules('confirm_password', 'Ulangi Kata Sandi', 'trim|required|matches[password]');
		if (!$this->form_validation->run()) {
			Self::$data['status'] 	= false;
			Self::$data['message'] 	= validation_errors(' ', '<br/>');
		}


		if (Self::$data['status']) {
			$random_string 		= strtolower(random_string('alnum', 64));

			// INSERT DATABASE DI JADIKAN ARRAY
			$dataregister 	= array(
				'user_fullname'			=> post('user_fullname'),
				'user_picture'			=> post('user_picture'),
				'user_address'			=> post('user_address'),
				'user_phone'			=> post('user_phone'),
				'user_code'				=> $random_string,
			);
			// INSERT KE DATABASE
			$this->ion_auth->register(post('username'), post('password'), post('email'), $dataregister, array(2));

			Self::$data['message'] 	= 'Pendaftaran Akun Baru Berhasil.';
			Self::$data['heading'] 	= 'Berhasil';
			Self::$data['type'] 	= 'success';
		} else {

			Self::$data['heading'] 	= 'Gagal';
			Self::$data['type'] 	= 'error';
		}

		return Self::$data;
	}
}

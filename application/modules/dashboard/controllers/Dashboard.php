<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {

			$this->session->set_flashdata(
				'auth_flash',
				alerts('Anda harus login terlebih dahulu untuk mengakses halaman ini !', 'danger')
			);

			redirect('login', 'refresh');
		} else {
			if (!userdata()) {
				$this->ion_auth->logout();
			}
		}
	}


	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function view_page($filename = 'dashboard')
	{


		if (!file_exists(APPPATH . 'modules/dashboard/views/page/' . $filename . '.php')) {
			show_404();
			exit;
		}

		$this->template->content->view('page/' . $filename);
		$this->template->publish();
	}
	function editproduk ($param){
		$data = array();
		$this->db->where('produk_code', $param);
		$produk = $this->db->get('tb_produk');

		$page = 'update-produk';
		if ($produk->num_rows() == 0 ){
			show_404();
			exit ;
		}
		$data ['produk'] = $produk->row();
		$this->template->content->view('page/' . $page, $data);
		$this->template->publish();

	}

	function updateproduk($param)
	{
		$filename 	= "edit-produk";
		$data 		= array();
		if (!file_exists(APPPATH . 'modules/dashboard/views/page/' . $filename . '.php')) {
			show_404();
			exit;
		}

		// VALIDASI PRODUK BERDASARKAN PRODUKCODE
		$this->db->where('produk_code', $param);
		$cekdata = $this->db->get('tb_produk');
		if ($cekdata->num_rows() == 0) {
			show_404();
			exit;
		}

		// SETELAH DI VALIDASI DATA CEK DIRUBAH MENJADI ROW KEMUDIAN DIKIRIM KE VIEW DENGAN MENGGUNAKAN DATA
		$data['produk'] = $cekdata->row();

		$this->template->content->view('page/' . $filename, $data);
		$this->template->publish();
	}

	
	function updatekategori($parameter)
	{
		$filename 	= "edit-kategori";
		$data 		= array();
		if (!file_exists(APPPATH . 'modules/dashboard/views/page/' . $filename . '.php')) {
			show_404();
			exit;
		}

		// VALIDASI PRODUK BERDASARKAN PRODUKCODE
		$this->db->where('kategori_kode', $parameter);
		$cekkategori = $this->db->get('tb_kategori');
		if ($cekkategori->num_rows() == 0) {
			show_404();
			exit;
		}

		// SETELAH DI VALIDASI DATA CEK DIRUBAH MENJADI ROW KEMUDIAN DIKIRIM KE VIEW DENGAN MENGGUNAKAN DATA
		$data['kategori'] = $cekkategori->row();

		$this->template->content->view('page/' . $filename, $data);
		$this->template->publish();
	}

	function updatesubkategori($sub)
	{
		$filename 	= "edit-subkategori";
		$data 		= array();
		if (!file_exists(APPPATH . 'modules/dashboard/views/page/' . $filename . '.php')) {
			show_404();
			exit;
		}

		// VALIDASI PRODUK BERDASARKAN PRODUKCODE
		$this->db->where('subkategori_kode', $sub);
		$ceksubkategori = $this->db->get('tb_subkategori');
		if ($ceksubkategori->num_rows() == 0) {
			show_404();
			exit;
		}

		// SETELAH DI VALIDASI DATA CEK DIRUBAH MENJADI ROW KEMUDIAN DIKIRIM KE VIEW DENGAN MENGGUNAKAN DATA
		$data['subkategori'] = $ceksubkategori->row();

		$this->template->content->view('page/' . $filename, $data);
		$this->template->publish();
	}

	function view_user($filename = 'account')
	{

		if (!file_exists(APPPATH . 'modules/dashboard/views/user/' . $filename . '.php')) {
			show_404();
			exit;
		}

		$this->template->content->view('user/' . $filename);
		$this->template->publish('frontpage/template');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontpage extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function index($page = 'beranda')
	{
		$data = array();
		$this->db->where('produk_alias', $page);
		$cekproduk = $this->db->get('tb_produk');

		$this->db->where('kategori_alias', $page);
		$cekkategori = $this->db->get('tb_kategori');

		if ($cekproduk->num_rows() == 1) {
			$page = 'produk_detail';
			$data['produk'] = $cekproduk->row();
		} else if ($cekkategori->num_rows() != 0) {
			$page = 'kategori';
			$data['kategori'] = $cekkategori->row();
		} else if (!file_exists(APPPATH . 'modules/frontpage/views/' . $page . '.php')) {
			show_404();
			exit;
		}
		$this->template->content->view($page, $data);
		$this->template->publish('');
	}

	function hapuscart()
	{
		$this->output->set_content_type('application/json');
		$data['status'] 	= true;
		$data['csrf_data']	= $this->security->get_csrf_hash();


		$data = array(
			'rowid' => post('code'),
			'qty'   => 0
		);

		$this->cart->update($data);

		$data['heading']    = 'Berhasil';
		$data['message']    = 'Produk Dihapus';
		$data['type']        = 'success';

		echo json_encode($data);
	}



	function cart()
	{
		// $data = array(
		// 	'code'    => post('produk_code'),
		// 	'jumlah'  => '1',
		// 	'harga'   => post('produk_harga'),
		// 	'nama'    => post('produk_nama'),
		// );

		// $this->cart->insert($data);
		// print_r($this->cart->contents());

		$diskon = (post('produk_harga') * post('produk_diskon')) / 100 ; 

		$data = array(
			'id'         => post('produk_code'),
			'qty'        => post('qtybutton'),
			'price'      => post('produk_harga'),
			'name'       => post('produk_nama'),
			'img'        => post('produk_gambar'),
			'warna'	     => post('warna'),
			'diskon'     => post('produk_diskon'),
			'totalharga' => post('produk_harga') - $diskon, 
		);

		$this->cart->insert($data);
		$data['status'] = true;
		echo json_encode($data);
	}
}

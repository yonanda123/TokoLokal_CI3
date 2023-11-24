<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Model
{

    private static $data = [
        'status'     => true,
        'message'     => null,
    ];

    function __construct()
    {
        parent::__construct();
        Self::$data['csrf_data']     = $this->security->get_csrf_hash();
    }

    function hapusproduk()
    {
        $this->db->where('produk_code', post('code'));
        $cekdata = $this->db->get('tb_produk');
        if ($cekdata->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Produk Tidak Ditemukan";
        }

        if (Self::$data['status']) {


            $this->db->delete('tb_produk', array('produk_code' => post('code')));

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Produk Telah Dihapus';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }

   

    function newproduk()
    {
        $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('produk_deskripsi', 'deskripsi Produk', 'required');
        $this->form_validation->set_rules('produk_harga', 'harga Produk', 'required');
        $this->form_validation->set_rules('produk_diskon', 'diskon Produk', 'required');
        $this->form_validation->set_rules('produk_stock', 'stock Produk', 'required');
        $this->form_validation->set_rules('produk_kategori', 'kategori Produk', 'required');
        $this->form_validation->set_rules('produk_subkategori', 'subkategori Produk', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
            
        }
            $config['upload_path']          = './assets/frontend/img';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 9999;
            $config['max_width']            = 9999;
            $config['max_height']           = 9999;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar_produk'))
            {
                    Self::$data['status']     = false;
                    Self::$data['message']     = $this->upload->display_errors();
            }
        if (Self::$data['status']) {
            $data_gambar = $this->upload->data();
            $random_code             = hash('sha256', random_string('numeric', 20));
            
            $this->db->insert(
                'tb_produk',
                [
                    'produk_nama' => post('produk_nama'),
                    'produk_deskripsi' => post('produk_deskripsi'),
                    'produk_harga' =>  post('produk_harga'),
                    'produk_diskon' =>  post('produk_diskon'),
                    'produk_stock' => post('produk_stock'),
                    'produk_kategori' => post('produk_kategori'),
                    'produk_subkategori' => post('produk_subkategori'),
                    'produk_alias' => url_title(post('produk_nama'), '-', true),
                    'produk_gambar' => $data_gambar['file_name'],
                    'produk_code' => $random_code,
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Data Disimpan';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }
    function updateproduk()
    {

        // VALIDASI KATEGORI BY KODE
        $this->db->where('produk_code', post('produk_code'));
        $cekproduk = $this->db->get('tb_produk');
        if ($cekproduk->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Data Produk Tidak Ditemukan";
        }

        // VALIDASI KATEGORI AGAR TIDAK KOSONG
        $this->form_validation->set_rules('produk_code', 'KODE', 'required');
        $this->form_validation->set_rules('produk_nama', 'Nama Produk', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }
            $config['upload_path']          = './assets/frontend/img';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 9999;
            $config['max_width']            = 9999; 
            $config['max_height']           = 9999;

            $this->load->library('upload', $config);

            
        if (Self::$data['status']) {
            
            if ( ! $this->upload->do_upload('gambar_produk'))
            {
                $this->db->update(
                    'tb_produk',
                    [
                        'produk_nama' => post('produk_nama'),
                        'produk_deskripsi' => post('produk_deskripsi'),
                        'produk_harga' => post('produk_harga'),
                        'produk_diskon' => post('produk_diskon'), 
                        'produk_stock' => post('produk_stock'),
                        'produk_kategori' => post('produk_kategori'),
                        'produk_subkategori' => post('produk_subkategori'),
                    ],
                    [
                        'produk_code' => post('produk_code'),
                    ]
                );
            } else {
                $data_gambar = $this->upload->data();
                $this->db->update(
                    'tb_produk',
                    [
                        'produk_nama' => post('produk_nama'),
                        'produk_deskripsi' => post('produk_deskripsi'),
                        'produk_harga' => post('produk_harga'),
                        'produk_diskon' => post('produk_diskon'), 
                        'produk_stock' => post('produk_stock'),
                        'produk_kategori' => post('produk_kategori'),
                        'produk_subkategori' => post('produk_subkategori'),
                        'produk_gambar' => $data_gambar['file_name'],
                    ],
                    [
                        'produk_code' => post('produk_code'),
                    ]
                );
            }


            
            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Produk Diupdate';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }
}

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

    function newgambar()
    {
        $this->form_validation->set_rules('nama_gambar', 'Nama Gambar', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
            
        }
            $config['upload_path']          = '.assets/frontend/img/logo';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 9999;
            $config['max_width']            = 9999;
            $config['max_height']           = 9999;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar'))
            {
                    Self::$data['status']     = false;
                    Self::$data['message']     = $this->upload->display_errors();
            }
        if (Self::$data['status']) {
            $gambar = $this->upload->data();
            
            $this->db->insert(
                'tb_gambar',
                [
                    'nama_gambar' => post('produk_nama'),
                    'gambar' => $gambar['file_name'],
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
}

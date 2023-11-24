<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Model
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

    function newcustomer()
    {

        $this->form_validation->set_rules('nama', 'Nama Customer', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $random_code             = hash('sha256', random_string('numeric', 20));

            $this->db->insert(
                'tb_customer',
                [
                    'nama' => post('nama'),
                    'jenis_kelamin' => post('jenis_kelamin'),
                    'no_telp' =>  post('no_telp'),
                    'alamat' => post('alamat'),
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

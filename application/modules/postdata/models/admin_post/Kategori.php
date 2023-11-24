<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Model
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

    function newkategori()
    {

        $this->form_validation->set_rules('kategori_name', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $random_code             = hash('sha256', random_string('numeric', 20));

            $this->db->insert(
                'tb_kategori',
                [
                    'kategori_name' => post('kategori_name'),
                    'kategori_alias' => url_title(post('kategori_name'), '-', true),
                    'kategori_kode' => $random_code,
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Kategori Disimpan';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }


    function updatekategori()
    {

        // VALIDASI KATEGORI BY KODE
        $this->db->where('kategori_kode', post('kategori_kode'));
        $cekkategori = $this->db->get('tb_kategori');
        if ($cekkategori->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Data Kategori Tidak Ditemukan";
        }

        // VALIDASI KATEGORI AGAR TIDAK KOSONG
        $this->form_validation->set_rules('kategori_kode', 'KODE', 'required');
        $this->form_validation->set_rules('kategori_name', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $this->db->update(
                'tb_kategori',
                [
                    'kategori_name' => post('kategori_name'),
                    'kategori_alias' => url_title(post('kategori_name'), '-', true),
                ],
                [
                    'kategori_kode' => post('kategori_kode'),
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Kategori Diupdate';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }


    function hapuskategori()
    {
        $this->db->where('kategori_kode', post('code'));
        $cekdata = $this->db->get('tb_kategori');
        if ($cekdata->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Produk Tidak Ditemukan";
        }

        if (Self::$data['status']) {


            $this->db->delete('tb_kategori', array('kategori_kode' => post('code')));

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Produk Telah Dihapus';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }

    function newsubkategori()
    {

        $this->form_validation->set_rules('subkategori_name', 'Nama Subkategori', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $random_code             = hash('sha256', random_string('numeric', 20));

            $this->db->insert(
                'tb_subkategori',
                [
                    'subkategori_kategorid' => post('subkategori_kategorid'),
                    'subkategori_name' => post('subkategori_name'),
                    'subkategori_alias' => url_title(post('subkategori_name'), '-', true),
                    'subkategori_kode' => $random_code,
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Subkategori Disimpan';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }
    function hapussubkategori()
    {
        $this->db->where('subkategori_kode', post('code'));
        $cekdata = $this->db->get('tb_subkategori');
        if ($cekdata->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Subkategori Tidak Ditemukan";
        }

        if (Self::$data['status']) {


            $this->db->delete('tb_subkategori', array('subkategori_kode' => post('code')));

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'Subkategori Telah Dihapus';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }
    function updatesubkategori()
    {

        // VALIDASI KATEGORI BY KODE
        $this->db->where('subkategori_kode', post('subkategori_kode'));
        $cekkategori = $this->db->get('tb_subkategori');
        if ($cekkategori->num_rows() == 0) {
            Self::$data['status']     = false;
            Self::$data['message']     = "Data SubKategori Tidak Ditemukan";
        }

        // VALIDASI KATEGORI AGAR TIDAK KOSONG
        $this->form_validation->set_rules('subkategori_kode', 'KODE', 'required');
        $this->form_validation->set_rules('subkategori_name', 'Nama SubKategori', 'required');
        if ($this->form_validation->run() == false) {
            Self::$data['status']     = false;
            Self::$data['message']     = validation_errors(' ', '<br/>');
        }

        if (Self::$data['status']) {

            $this->db->update(
                'tb_subkategori',
                [
                    'subkategori_name' => post('subkategori_name'),
                    'subkategori_alias' => url_title(post('subkategori_name'), '-', true),
                ],
                [
                    'subkategori_kode' => post('subkategori_kode'),
                ]
            );

            Self::$data['heading']    = 'Berhasil';
            Self::$data['message']    = 'SubKategori Diupdate';
            Self::$data['type']        = 'success';
        } else {

            Self::$data['heading']    = 'Failed';
            Self::$data['type']        = 'error';
        }

        return Self::$data;
    }
}

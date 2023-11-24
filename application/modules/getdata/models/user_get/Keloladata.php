<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keloladata extends CI_Model
{

    private static $data = [
        'status'     => true,
        'message'     => null,
    ];

    public function __construct()
    {
        parent::__construct();
    }

    function getsubkategori()
    {
        $this->db->where('subkategori_kategorid', $this->input->get('kategori_id'));
        $getsubkategori = $this->db->get('tb_subkategori');
        Self::$data['result'] = $getsubkategori->result();
        return Self::$data;
    }
}

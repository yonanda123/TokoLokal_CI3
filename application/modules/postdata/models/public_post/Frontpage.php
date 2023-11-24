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

    function tambahcart(){
        
        $data = array(
            'tb_produk', [
        
            'id'      => 'produk_id',
            'qty'     => 'qtybutton',
            'price'   => 'produk_harga',
            'name'    => 'produk_nama',
            'ukuran'  =>  array('produk_ukuran' => 'M','S','L','XL','XXL' ),
            'warna'   =>  array('produk_warna' => 'blue','maroon','gray','green','yellow' ),
            ]
        );
        $this->cart->insert($data);
    }
    
}

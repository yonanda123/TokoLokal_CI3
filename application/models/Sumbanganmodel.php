<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sumbanganmodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}


	function total_nominal()
	{

					$this->db->select('SUM(sumbangan_nominal) as total');
        $return = 	$this->db->get('tb_sumbangan')->row();

        return $return;
	}

}

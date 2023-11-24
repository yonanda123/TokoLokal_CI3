<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdrawalmodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author Ayatulloh Ahad R
	 **/
	public function getTotalWithdrawal( $satuan = 'all' )
	{	

		if ( $satuan == 'today' ) {
			$this->db->where('withdrawl_date >=', date('Y-m-d 00:00:00', now() ));
			$this->db->where('withdrawl_date <=', date('Y-m-d 23:59:59', now() ));
		}

		if ( $satuan == 'monthly' ) {
			$this->db->where('withdrawl_date >=', date('Y-m-01 00:00:00', now() ));
			$this->db->where('withdrawl_date <=', date('Y-m-t 23:59:59', now() ));
		}

		$this->db->select_sum('withdrawl_amount');
		$this->db->where('withdrawl_userid', userid() );
		$this->db->where('withdrawl_status !=', 'rejected');
		$total_withdrawal 	= $this->db->get('tb_withdrawl')->row()->withdrawl_amount;

		return $total_withdrawal;

	}

}

/* End of file Withdrawalmodel.php */
/* Location: ./application/models/Withdrawalmodel.php */
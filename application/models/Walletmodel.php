<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walletmodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here 	
	}


	/**
	 * get balance wallet dari address baik wallet register atau wallet withdrawal
	 *
	 * @return void
	 * @author Ayatulloh Ahad Robanie [ayatulloh@idprogrammer.com]
	 **/
	public function walletAddressBalance( $wallet_address = null, $date_start = null, $date_end = null )
	{

		$return 		= 0;
		$saldo_masuk 	= $saldo_keluar = 0;

		$this->db->select_sum('w_balance_amount');
		if (($date_start != null) && ($date_end != null)) {
			$this->db->where('w_balance_date_add BETWEEN "'.$date_start.'" AND "'.$date_end.'"');
		}
		$this->db->join('tb_users_wallet', 'wallet_id = w_balance_wallet_id', 'left');
		$this->db->where('wallet_address', $wallet_address);
		$this->db->where('w_balance_type', 'credit');
		$get 			= $this->db->get('tb_wallet_balance');
		$get_saldo_masuk 	= $get->row()->w_balance_amount;

		if ( ! empty( $get_saldo_masuk ) ) {
			$saldo_masuk 	= $get_saldo_masuk;
		}


		//get saldo keluar
		$this->db->select_sum('w_balance_amount');
		if (($date_start != null) && ($date_end != null)) {
			$this->db->where('w_balance_date_add BETWEEN "'.$date_start.'" AND "'.$date_end.'"');
		}
		$this->db->join('tb_users_wallet', 'wallet_id = w_balance_wallet_id', 'left');
		$this->db->where('wallet_address', $wallet_address);
		$this->db->where('w_balance_type', 'debit');
		$get 			= $this->db->get('tb_wallet_balance');
		$get_saldo_keluar 	= $get->row()->w_balance_amount;

		if ( ! empty( $get_saldo_keluar ) ) {
			$saldo_keluar 	= $get_saldo_keluar;
		}

		$return 			= $saldo_masuk - $saldo_keluar;

		return $return;

	}


	function SaldoMasuk( $wallet_address = null, $date_start = null, $date_end = null )
	{

		$return 		= 0;
		$saldo_masuk 	= $saldo_keluar = 0;

		$this->db->select_sum('w_balance_amount');
		if (($date_start != null) && ($date_end != null)) {
			$this->db->where('w_balance_date_add BETWEEN "'.$date_start.'" AND "'.$date_end.'"');
		}
		$this->db->join('tb_users_wallet', 'wallet_id = w_balance_wallet_id', 'left');
		$this->db->where('wallet_address', $wallet_address);
		$this->db->where('w_balance_type', 'credit');
		$get 			= $this->db->get('tb_wallet_balance');
		$get_saldo_masuk 	= $get->row()->w_balance_amount;

		if ( ! empty( $get_saldo_masuk ) ) {
			$saldo_masuk 	= $get_saldo_masuk;
		}

		$return 			= $saldo_masuk;

		return $return;

	}

}

/* End of file Walletmodel.php */
/* Location: ./application/models/Walletmodel.php */
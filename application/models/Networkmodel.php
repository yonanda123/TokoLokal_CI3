<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Networkmodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author Ayatulloh Ahad R - ayatulloh@idprogrammer.com
	 **/
	public function getUserLevel( $userid = null, $level = 1 )
	{
		if ( $level > 3 ) {
			return array();
		}

		$userid 	= ( $userid == null )? userid() : $userid;

		$this->db->select('id, upline_id, position, username');
		$this->db->where('upline_id', $userid);
		$get_user 	= $this->db->get('tb_users');

		$result		= array();
		$arrNum		= 0;

		foreach ($get_user->result() as $user) {
			
			$result[ $arrNum ]['id']			= $user->id;
			$result[ $arrNum ]['upline_id']		= $user->upline_id;
			$result[ $arrNum ]['username']		= $user->username;
			$result[ $arrNum ]['level']			= $level;
			$result[ $arrNum ]['level_data']	= $this->getUserLevel( $user->id, $level + 1 );

			$arrNum++;

		}


		return $result;
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author Ayatulloh Ahad R - ayatulloh@idprogrammer.com
	 **/
	public function test( $level = 1 )
	{
		$data 		= $this->getUserLevel();
		$result 	= array();
		$count		= 1;

		if ( $level > 5 ) {
			return false;
		}

		foreach ($data as $key => $value) {
			if ( $value['level'] == $level ) {

				unset( $value['level_data'] );
				$result[] 	= $value;

			}else{

				foreach ($value['level_data'] as $value2) {
					echo $value2['username'];
					$this->test( $level + 1 );
				}



			}
		}


		return $result;
		
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function getTopSponsor()
	{

		$get 	= $this->db->query('SELECT count(referral_id) AS total_reff, referral_id
					FROM tb_users
					JOIN tb_lending ON lending_userid = id
					WHERE referral_id != 0 
					AND referral_id != 1 
					GROUP BY referral_id
					ORDER BY count(referral_id) DESC
					LIMIT 5
				');	

		return $get->result();

	}

	public function getTopSponsor10()
	{

		$get 	= $this->db->query('SELECT count(referral_id) AS total_reff, referral_id
					FROM tb_users
					WHERE referral_id != 0 
					-- AND referral_id != 1 
					GROUP BY referral_id
					ORDER BY count(referral_id) DESC
					LIMIT 5
				');	

		return $get->result();

	}

	public function getTopBonus($limit = 0, $offset = 0)
	{

		$get 	= $this->db->query('SELECT
						SUM(bonus_amount) AS total_bonus,
						bonus_userid,
						tb_users.* 
					FROM
						tb_bonus
					JOIN tb_users ON tb_users.id = tb_bonus.bonus_userid 
					WHERE bonus_userid != 1 
					GROUP BY
						bonus_userid
					ORDER BY
						count(bonus_amount) DESC
					LIMIT 10
				');	

		return $get->result();

	}

}

/* End of file Networkmodel.php */
/* Location: ./application/models/Networkmodel.php */
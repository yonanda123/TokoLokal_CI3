<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}


	function total_member_keseluruhan()
	{
					$this->db->select('tb_users.*, tb_users_groups.user_id, tb_users_groups.group_id');
        			$this->db->where(array('tb_users.id !=' => userid() ));
        			$this->db->join('tb_users_groups', 'tb_users_groups.user_id = tb_users.id', 'left');
        			$this->db->where('tb_users_groups.group_id', 2);
        $return = 	$this->db->get('tb_users')->num_rows();

        return $return;
	}


	function total_member_hari_ini()
	{

		/*
		SELECT
			TIMESTAMPDIFF(
				DAY,
				FROM_UNIXTIME(created_on),
				CURDATE()
			) AS umur_member
		FROM
			`tb_users`
		HAVING umur_member = 0
		*/			

		$return = $this->db->query('SELECT TIMESTAMPDIFF( DAY, FROM_UNIXTIME(created_on), CURDATE() ) AS umur_member FROM `tb_users` HAVING umur_member = 0')->num_rows();

        return $return;
	}


	function total_member_bulan_ini()
	{

		$return = $this->db->query('SELECT TIMESTAMPDIFF( month, FROM_UNIXTIME(created_on), CURDATE() ) AS umur_member FROM `tb_users` HAVING umur_member = 0')->num_rows();

        return $return;
	}


	function total_member_gratis()
	{
		/*
		SELECT
			*
		FROM
			tb_users as u
		LEFT JOIN tb_lending ON lending_userid = u.id
		JOIN tb_users_groups ON user_id = u.id
		WHERE
			lending_userid IS NULL
		AND group_id = 2
		*/

		$return = $this->db->query('SELECT * FROM tb_users as u LEFT JOIN tb_lending ON lending_userid = u.id JOIN tb_users_groups ON user_id = u.id
									WHERE lending_userid IS NULL AND group_id = 2')->num_rows();
        return $return;
	}


	function total_member_berbayar()
	{
		$return = $this->db->query('SELECT * FROM tb_users as u JOIN tb_lending ON lending_userid = u.id JOIN tb_users_groups ON user_id = u.id
									WHERE group_id = 2')->num_rows();
        return $return;
	}

}

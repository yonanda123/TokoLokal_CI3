<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->init();
		
	}
	function isLevel($level)
	{
		$return 	= false;

		$this->db->where('titiklevel_level', $level);
		$this->db->where('titiklevel_userid', userid());
		$get 		= $this->db->get('tb_titiklevel');
		if ( $get->num_rows() != 0 ) {
			$return 	= true;
		}
		
		return $return;
	}

	function saveFotoprofile(){
		$data['status'] 	= true;

		$config['upload_path'] 		= './assets/images/user/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']  		= '10000';
		$config['max_width']  		= '102400';
		$config['max_height']  		= '76800';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('fotoprofile') ){
			$data['status'] 	= false;
			$data['message'] 	= alerts($this->upload->display_errors(),'danger');
			$data['heading'] 	= 'Failed';
			$data['type'] 		= 'error';
		}

		if ( $data['status'] ) {

			$uploaded 						= $this->upload->data();
	        $config['image_library']		=	'gd2';
	        $config['source_image']			=	'./assets/images/user/'.$uploaded['file_name'];
	        $config['create_thumb']			=	FALSE;
	        $config['maintain_ratio']		=	FALSE;
	        $config['quality']				=	'85%';
	        $config['width']				=	150;
	        $config['height']				=	150;
	        $config['new_image']			=	'./assets/images/user/'.$uploaded['file_name'];
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();
	        $userdata = userdata();
	        if($userdata->user_picture != 'avatar-2.png'){
	        	unlink($_SERVER['DOCUMENT_ROOT'].'/assets/images/user/'.$userdata->user_picture);
	        }

			//update user avatar
			$this->ion_auth->update( userid(), array('user_picture' => $uploaded['file_name']) );

			$data['message'] 	= alerts('Upload user image Successfully !');
			$data['heading'] 	= 'Success';
			$data['type'] 		= 'success';

		}

		$this->session->set_flashdata('user_picture', $data['message']);
		return $data;

	}



	/**
	 * initializing function for autoload
	 *
	 * @return void
	 * @author Ayatulloh Ahad Robanie [ayatulloh@idprogrammer.com]
	 **/
	private function init()
	{

		/*========================================================
		=            CREATE REFERRAL SYSTEM DETECTION            =
		========================================================*/

		if( $this->input->get('ref-id') ){

			//clear referral sebelumnya
			$this->session->unset_userdata(['referralID', 'referralMessage']);


			//setting default referral code
			$default_referral 			= 'J3chDe';
			$status 					= true;
			$set['referralMessage'] 	= null;	
			
			$userdata 	= userdata([
				'user_referral_code'	=> $this->input->get('ref-id')
			]);

			if ( ! $userdata ) {
				$status 					= false;
				$set['referralMessage'] 	= alerts('Kode Referral Anda tidak valid !', 'danger');

			}else {

				//validate user yang di pakai referral sudah aktivasi
				if( ! $this->is_active( $userdata->id ) ){
					$status 			= false;
					$set['referralMessage'] 	= alerts('Akun Anda masih status "Free Member". Anda tidak diizinkan untuk melakukan registrasi sponsor', 'danger');
				}

			}

			if ( $status ) {
				$set['referralID'] 			=  $userdata->user_referral_code;
			}

			$this->session->set_userdata( $set );

		}
		
		/*=====  End of CREATE REFERRAL SYSTEM DETECTION  ======*/


		if ( ! $this->session->userdata('referralID') ) {

			$this->db->order_by('rand()');
			$this->db->limit(1);
			$this->db->join('tb_users', 'tb_users.id = tb_lending.lending_userid', 'left');
			$random_user_code 	= $this->db->get('tb_lending')->row();

			$array 	= array(
				'referralID' => $random_user_code->user_referral_code
			);			
			$this->session->set_userdata( $array );
		}
		

	}

	/**
	 * function untuk mengambil wallet dari user
	 *
	 * @return stdClass from row()
	 * @author Ayatulloh Ahad Robanie [ayatulloh@idprogrammer.com]
	 **/
	public function userWallet( $wallet_type = 'withdrawal', $userid = null )
	{

		$return 	= false;
		$userid 	= ( $userid == null )? userid() : $userid;

		$this->db->where('wallet_type', $wallet_type);
		$this->db->where('wallet_user_id', $userid);
		$get 		= $this->db->get('tb_users_wallet');
		if ( $get->num_rows() == 1 ) {
			$return 	= $get->row();
		}

		return $return;


	}


	/**
	 * function untuk cek user apakah sudah aktif apa belum
	 *	status aktif berdasarkan user lending aktif ketika date end lebih besar dari sekarang()
	 * @return void
	 * @author 
	 **/
	public function is_active( $userid = null )
	{

		$status_active 				= false;
		$userid = ( $userid == null ) ? userid() : $userid ;

		$get 	= $this->lendingmodel->get(array(
			'lending_userid' 		=> $userid,
			'lending_dateend >=' 	=> sekarang()
		));

		if ( $get != false ) {
			$status_active 				= true;
		}

		return $status_active;
	}

	function cekleveldata( $userid = null, $level = null, $position = 'kesatu')
	{
		$totalkaki	= $this->getFoot( $userid, $level );

		$kesatu		= $this->getFoot( $userid, 'kesatu' );
		$kedua		= $this->getFoot( $userid, 'kedua' );
		$ketiga		= $this->getFoot( $userid, 'ketiga' );
		$keempat	= $this->getFoot( $userid, 'keempat' );
		$kelima		= $this->getFoot( $userid, 'kelima' );

		if ( $kesatu <= $kedua || $kesatu < $ketiga || $kesatu <  $keempat || $kesatu <  $kelima) {
			$position 		= 'kesatu';
		}elseif ( $kesatu >= $kedua || $kedua < $ketiga || $kedua <  $keempat || $kedua <  $kelima) {
			$position 		= 'kedua';
		}elseif ( $ketiga > $kesatu || $ketiga > $kedua || $ketiga <=  $keempat || $ketiga <  $kelima) {
			$position 		= 'ketiga';
		}elseif ( $keempat > $kesatu || $keempat > $kedua || $keempat >  $kesatu || $keempat <=  $kelima) {
			$position 		= 'keempat';
		}elseif ( $kelima > $kesatu || $kelima > $kedua || $kelima >  $ketiga || $kelima >  $keempat) {
			$position 		= 'kelima';
		}

		// $this->db->where('levelke', $level);
		$this->db->where('upline_id', $userid);
		$this->db->where('position', $position);
		$get_bawahnya_pass	 	= $this->db->get('tb_users');

		$totalmember = array('5','25','125','625','3125','15625','78125','390625','1953125','9765625','48828125','244140625','1220703125','6103515625','30517578125','152587890625','762939453125','3814697265625','19073486328125','95367431640625');

		if( $get_bawahnya_pass->num_rows() == 0 ){

			$userid_dipakai 	= $userid;

		}else{

			// if( $totalkaki <= $totalmember[$level - 1] ){
			// 	$do_function 		= $get_bawahnya_pass->row();
			// 	$userid_dipakai 	= $do_function->id;
			// 	$level 				= $level + 1;
			// }else{
			// 	$get_data_bawahnya 	= $get_bawahnya_pass->row();
			// 	$this->cekleveldata( $get_data_bawahnya->id, $level + 1, $position );
			// }
		}
		$result['userid'] 		= $userid_dipakai;
		$result['level'] 		= $level;
		$result['position'] 	= $position;

		return $result;

	}

	function getFoot($userid='1', $position = 'kelima')
	{
		$user 		= $this->get_jaringan( $userid , ' WHERE upline_id="'.$userid.'" and position = "'.$position.'" ');
		$totalkaki  = 0;

		foreach ($user as $value) {	
			$get = $this->get_jaringan( $value->id );
			foreach ($get as $value2 ){
				$totalkaki++;
			}
			$totalkaki++;
		}
		return $totalkaki;
	}










	public function getRandomUplineIDRight( $userid = null, $level = 1, $position = 'kesatu' )
	{
		$totalkaki	= $this->getFoot( $userid, $level );

		// $result	= array();
		// kesatu, kedua, ketiga, keempat, kelima
		$kesatu		= $this->getFoot( $userid, 'kesatu' );
		$kedua		= $this->getFoot( $userid, 'kedua' );
		$ketiga		= $this->getFoot( $userid, 'ketiga' );
		$keempat	= $this->getFoot( $userid, 'keempat' );
		$kelima		= $this->getFoot( $userid, 'kelima' );

		if ( $kesatu < $kedua || $kesatu < $ketiga || $kesatu <  $keempat || $kesatu <  $kelima) {
			$position 		= 'kesatu';
		}elseif ( $kedua < $kesatu || $kedua < $ketiga || $kedua <  $keempat || $kedua <  $kelima) {
			$position 		= 'kedua';
		}elseif ( $ketiga < $kesatu || $ketiga < $kedua || $ketiga <  $keempat || $ketiga <  $kelima) {
			$position 		= 'ketiga';
		}elseif ( $keempat < $kesatu || $keempat < $kedua || $keempat <  $kesatu || $keempat <  $kelima) {
			$position 		= 'keempat';
		}elseif ( $kelima < $kesatu || $kelima < $kedua || $kelima <  $ketiga || $kelima <  $keempat) {
			$position 		= 'kelima';
		}

		//get bawahnya pass sesuai dengan posisi
		$this->db->where('upline_id', $userid);
		$this->db->where('levelke', $level);
		$this->db->where('position', $position);
		$get_bawahnya_pass	 	= $this->db->get('tb_users');

		$totalmember = array('5','25','125','625','3125','15625','78125','390625','1953125','9765625','48828125','244140625','1220703125','6103515625','30517578125','152587890625','762939453125','3814697265625','19073486328125','95367431640625');

		if( $get_bawahnya_pass->num_rows() == 0 ){
			$userid_dipakai 	= $userid;

		}else{
			$get_data_bawahnya 	= $get_bawahnya_pass->row();
			if( $totalkaki <= $totalmember[$level - 1] ){
				$do_function 		= $this->getRandomUplineIDRight( $get_data_bawahnya->id,$level + 1, $position );
			}else{
				$do_function 		= $this->getRandomUplineIDRight( $userid, $level + 1, $position );
			}

			$userid_dipakai 	= $do_function['userid'];
			$level 				= $do_function['level'];
			$position 			= $do_function['position'];

			// if( $totalkaki <= $totalmember[$level - 1] ){
			// 	$do_function 		= $get_bawahnya_pass->row();
			// 	$userid_dipakai 	= $do_function->id;
			// 	$level 				= $level + 1;
			// }else{
			// 	$get_data_bawahnya 	= $get_bawahnya_pass->row();
			// 	$this->getRandomUplineIDRight( $get_data_bawahnya->id, $level + 1, $position );
			// }

			// $get_data_bawahnya 	= $get_bawahnya_pass->row();
			// $do_function 		= $this->getRandomUplineIDRight( $get_data_bawahnya->id, $position );

			// $userid_dipakai 	= $do_function['userid'];
			// $position 			= $do_function['position'];
			
		}


		$result['userid'] 		= $userid_dipakai;
		$result['position'] 	= $position;
		$result['level'] 		= $level;
		return $result;

	}

	


	function totalbylevel($userid='1', $level = null)
	{
		$user 		= $this->get_jaringan( $userid , ' WHERE upline_id="'.$userid.'" and levelke = "'.$level.'" ');
		$totalkaki  = 0;

		foreach ($user as $value) {	
			$get = $this->get_jaringan( $value->id );
			foreach ($get as $value2 ){
				$totalkaki++;
			}
			$totalkaki++;
		}
		return $totalkaki;
	}

 
	public function totalFoot( $userid = '1', $position = 'kesatu' )
	{
		$user 		= $this->get_jaringan( $userid , ' WHERE upline_id="'.$userid.'" and position = "'.$position.'" ');
		$totalomset  = 0;

		foreach ($user as $value) {	
			$get 			= $this->get_jaringan( $value->id );
			$this->db->join('tb_users', 'tb_users.id = tb_lending.lending_userid', 'left');
			$this->db->where('tb_users.leader', 'false');
			$this->db->where('lending_userid', $value->id);
			$getlending 	= $this->db->get('tb_lending');

			if ($getlending->num_rows() > 0){
				foreach ($getlending->result() as $key) {
					$totalomset = $totalomset + $key->lending_amount;
				}
			}
			foreach ($get as $value2 ){

				$this->db->join('tb_users', 'tb_users.id = tb_lending.lending_userid', 'left');
				$this->db->where('tb_users.leader', 'false');
				$this->db->where('lending_userid', $value2->id);
				$getlending2 	= $this->db->get('tb_lending');

				if ($getlending2->num_rows() > 0){
					foreach ($getlending2->result() as $key) {
						$totalomset = $totalomset + $key->lending_amount;
					}
				}
			}
		}
		return $totalomset;

	}



	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function get_jaringan( $user_id = null, $where = null )
	{

		$userid = ( $user_id == null ) ? userid() : $user_id ;

		$get = $this->db->query('
			SELECT  `id`,
			        `username`,
			        `upline_id`,
			        `position`
			from    (select * from tb_users '.$where.' 
			         order by `upline_id`, `id`) tb_users_sorted,
			        (select @pv := '.$userid.') initialisation
			where   find_in_set(`upline_id`, @pv) > 0
			and     @pv := concat(@pv, ",", `id`)
		');
		
		// JARINGAN DENGAN REFERRAL
		/*$get = $this->db->query('
			SELECT  `id`,
			        `username`,
			        `referral_id` 
			from    (select * from tb_users
			         order by `referral_id`, `id`) tb_users_sorted,
			        (select @pv := '.$userid.') initialisation
			where   find_in_set(`referral_id`, @pv) > 0
			and     @pv := concat(@pv, ",", `id`)
		');*/

		return $get->result();

	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author Ayatulloh Ahad R
	 **/
	public function cek_jaringan( $current_user = 'null', $userid_banding = 'null' )
	{
		
		$this->db->order_by('id', 'desc');
		$all_member 	= $this->ion_auth->users();
		$no 			= 1;
		foreach ($all_member->result() as $member) {
			
			if ( $member->id <= $userid_banding ) {

				if ( $userid_banding != $member->idreferensi ) {
					
					echo  $no++. '' .$member->username. '<br>';

				}
				
				// echo 'lalal <br>';

			}

		}
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author Ayatulloh Ahad R
	 **/
	public function get_user_position($refid = 'null' , $position = 'null')
	{
		

		$userdata 			= new stdClass;
		/*$this->db->join('tb_lending', 'lending_userid = id', 'left');
		$this->db->join('tb_packages', 'package_id = lending_package_id', 'left');*/
		$query = $this->db->get_where('tb_users',array('upline_id' => $refid, 'position' => $position));
		if ($query->num_rows() == 1 ) {

			$userdata 			= $query->row();
			$userdata->result 	= 1;

		} else {

			$userdata->result 	= 0;

			//tidak ada data sehingga tombol register disable
			$fields 		= $this->db->list_fields('tb_users');
			foreach ($fields as $field) {
				
				$userdata->$field 	= null;

			}


			/* CHECKING REFERENSI DATA */
			/*$this->db->join('tb_lending', 'lending_userid = id', 'left');
			$this->db->join('tb_packages', 'package_id = lending_package_id', 'left');*/
			$this->db->select('id, upline_id, user_code');
			$this->db->where( 'id', $refid );
			$ref_data 		= $this->db->get('tb_users');
			if ( $ref_data->num_rows() == 1 ) {
				
				// ada data referensi sehingga membuat tombol link registrasi member baru
				$user_data				= $ref_data->row();
				$userdata->referral_id 	= $user_data->id;
				$userdata->user_code	= $user_data->user_code;
				$userdata->position 	= $position;
				$userdata->result 		= 2;

			} 
			

		}

		$current_userdata 			= userdata();
		$userdata->my_reff_code 	= $current_userdata->user_referral_code;

		return $userdata;


	}

	function avatar( $type = 'url', $userid = null )
	{

		$base_path 	= 'uploads/users/';

		$userid 	= ( $userid == null )? userid() : $userid;
		$get 		= userdata([ 'id' => $userid ]);

		if( $type == 'url' ){
			$result 	= base_url( $base_path . $get->user_picture );
		}else{
			$result 	= img([
				'src'	=> $base_path . $get->user_picture
			]);
		}

		return $result;

	}

	function getupline($userid = null)
	{
		$result = '';
		// $this->db->where('upline_id', $upline);
		// $this->db->where('referral_id', userid());
		// $this->db->where('user_status', '1');
		// $cekdata = $this->db->get('tb_users');
		// foreach ($cekdata->result() as $show) {
		// 	if($cekdata->num_rows() == 0){
		// 		$result 	= $show;
		// 	}else{
		// 		// $this->getupline($show->id);
		// 	}
		// }
		// $jumlahkaki	= $this->hitungFoot( $userid );
		// if ( $jumlahkaki < 2 ) {
		// 	$result 		= 'left';
		// }else{
		// 	$result 		= 'right';
		// }


		$this->db->where('upline_id', $userid);
		$this->db->where('referral_id', userid());
		$get_bawahnya_pass	 	= $this->db->get('tb_users');
		if( $get_bawahnya_pass->num_rows() < 2 ){
			
			foreach ($get_bawahnya_pass->result() as $show) {
				$userid_dipakai 	= $show->id;
			}

		}else{

			$get_data_bawahnya 	= $get_bawahnya_pass->row();
			$do_function 		= $this->getupline( $get_data_bawahnya->id );

			$userid_dipakai 	= $do_function;
		}
		return $userid_dipakai;
	}

	function hitungFoot($userid = null )
	{
		$user 		= $this->get_jaringan( $userid , ' WHERE upline_id="'.$userid.'"');
		$totalkaki  = 0;

		foreach ($user as $value) {	
			$get = $this->get_jaringan( $value->id );
			foreach ($get as $value2 ){
				$totalkaki++;
			}
			$totalkaki++;
		}
		return $totalkaki;
	}

}

/* End of file Usermodel.php */
/* Location: ./application/models/Usermodel.php */
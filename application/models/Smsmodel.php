<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smsmodel extends CI_Model {

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
	public function send( $phone_number = null, $message = null )
	{

		if ( $phone_number == null || $message == null ) {
			return false;
		}

		$user_key 				= 'nfacj9';
		$user_pass_key			= 'IDprogrammer123';
		$message 				= urlencode( $message );

		//validate saldo mencukupi untuk kirim SMS
		$zenziva_credit_check 	= 'https://alpha.zenziva.net/apps/getbalance.php?userkey='.$user_key.'&passkey='.$user_pass_key.'';
		$get_saldo 				= json_decode( getUrlContent($zenziva_credit_check) );

		if ( $get_saldo->Credit == 0 ) {
			return false;
		}


		$zenziva_sms_callback 	= 'https://alpha.zenziva.net/apps/smsapi.php?userkey='.$user_key.'&passkey='.$user_pass_key.'&nohp='.$phone_number.'&pesan='.$message.'';

		return getUrlContent( $zenziva_sms_callback );


	}

}

/* End of file Smsmodel.php */
/* Location: ./application/models/Smsmodel.php */
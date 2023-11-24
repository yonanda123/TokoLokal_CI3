<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();

		if ( ! $this->ion_auth->is_admin() ) :
			redirect('login','refresh');
		endif;

	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/

	function index( $filename = 'dashboard/dashboard' )
	{
		
		if ( ! file_exists( APPPATH . 'modules/administrator/views/' . $filename . '.php' ) ) {
			show_404();
			exit;
		}
		$this->template->content->view( 'administrator/' .$filename );
		$this->template->publish('dashboard/template');	
	}
}
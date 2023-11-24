<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends MX_Controller {

	function __construct()
	{
		
		parent::__construct();
		if ( ! $this->ion_auth->logged_in() ) {
			redirect('login','refresh');
		}


	}
	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function admin( $filename = 'null' )
	{	
		
		if ( ! $this->ion_auth->is_admin() ) {
			$this->output->set_status_header( 403 );
			exit;
		}


		if ( ! file_exists( APPPATH. '/modules/modal/views/admin/' . $filename . '.php' ) ) {
			show_404();
			exit;
		}

		echo $this->load->view( 'admin/'.$filename, [], true);
	
	}
	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function adminpanel( $filename = 'null' )
	{	
		
		$user_group 	= $this->ion_auth->get_users_groups()->row();
		if ( $user_group->id != 6 ) {
			$this->output->set_status_header( 403 );
			exit;
		}


		if ( ! file_exists( APPPATH. '/modules/modal/views/adminpanel/' . $filename . '.php' ) ) {
			show_404();
			exit;
		}

		echo $this->load->view( 'adminpanel/'.$filename, [], true);
	
	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function csupport( $filename = 'null' )
	{	
		
		$user_group 	= $this->ion_auth->get_users_groups()->row();
		if ( $user_group->id != 5 ) {
			$this->output->set_status_header( 403 );
			exit;
		}


		if ( ! file_exists( APPPATH. '/modules/Modal/views/csupport/' . $filename . '.php' ) ) {
			show_404();
			exit;
		}

		echo $this->load->view( 'csupport/'.$filename, [], true);
	
	}

	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function member( $filename = 'null' )
	{
		if ( ! file_exists( APPPATH. '/modules/modal/views/member/' . $filename . '.php' ) ) {
			show_404();
			exit;
		}

		echo $this->load->view( 'member/'.$filename, [], true);
	
	}	
	/**
	 * @author Mahfud Ivan Patoni [mahfudivan@icloud.com]
	 **/
	function accounting( $filename = 'null' )
	{	
		
		$user_group 	= $this->ion_auth->get_users_groups()->row();
		if ( $user_group->id != 7 ) {
			$this->output->set_status_header( 403 );
			exit;
		}

		if ( ! file_exists( APPPATH. '/modules/modal/views/accounting/' . $filename . '.php' ) ) {
			show_404();
			exit;
		}

		echo $this->load->view( 'accounting/'.$filename, [], true);
	
	}

}
<?php
/**
 * @file Server_time.php
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Server_time extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ( ! $this->input->is_ajax_request() )
			show_404();
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			exit;
	}


	// ------------------------------------------------------------------------


	/**
	 * Prints server time, used for server time synchronization
	 */
	public function index()
	{
		echo shj_now_str();
	}
}
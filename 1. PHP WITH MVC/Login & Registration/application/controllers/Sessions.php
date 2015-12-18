<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Sessions extends CI_Controller {

	//method to shwo login form
	
	//method to do actual logging in

	public function index()
	{
		$this->load->view('sessions');
	}
}
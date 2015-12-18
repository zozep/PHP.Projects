<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Sessions extends CI_Controller {

	//method to shwo login form
	public function new_session()
	{
		$this->load->view("Sessions/new_session");
	}
	//method to do actual logging in

}
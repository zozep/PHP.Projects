<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $view_data = array();

	public function index()
	{
		$this->view_data['date'] = date('M d, Y');
		$this->view_data['time'] = date('h:i A');

		$this->load->view('time_display', $this->view_data);
	}
}
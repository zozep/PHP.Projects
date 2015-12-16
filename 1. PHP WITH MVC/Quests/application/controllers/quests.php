<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quests extends CI_Controller {

	public function index()
	{
		// get session data, put into $quests
		$quests = $this->session->userdata('quests');
		$this->load->view('home', array('quests' => $quests));
	}

	public function new_quest()
	{
		$this->load->view('new_quest');

	}

	public function create()
	{	
		  
		$post = $this->input->post();
		$quests = $this->session->userdata('quests');
		
		if (!$quests) {
			$quests = array();
		}

		$quests[] = $post;  // Push posts to array $quests
		$this->session->set_userdata('quests', $quests);

		redirect(base_url('quests'));
	}
}
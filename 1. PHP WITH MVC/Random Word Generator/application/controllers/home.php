<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $view_data = array(),
			  $attempt = 0,
			  $word = "";

	public function __construct() 
	{
		parent:: __construct();
		$this->attempt = $this->session->userdata('attempt');
		$this->word = $this->session->userdata('word');
	}

	public function index()
	{
		if(!$this->word)
		{
			$this->word = 'xbox';
			$this->session->set_userdata('word', $this->word);
		}

		$this->load->view('home');
	}

	public function process_word()
	{
		if($this->attempt)
		{
			$this->attempt++;
		}
		else
		{
			$this->attempt = 1;
		}
		$word = str_shuffle($this->word);
		$this->session->set_userdata('word', $word);
		$this->session->set_userdata('attempt',$this->attempt);
		redirect(base_url());
	}
}
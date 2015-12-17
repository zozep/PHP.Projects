<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gold extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('gold'))
		{
			$this->session->set_userdata('gold',0);
			$this->session->set_userdata('activities', []);
		}
		$this->load->view('main');
	}

	public function farm()
	{
		$rand = rand(10,20);
		$gold = $this->session->userdata('gold');
		$activities = $this->session->userdata('activities');
		$gold += $rand;
		array_push($activities, "You entered a farm and earned $rand golds ". date("F j Y g:i a") ."</br>");
		$this->session->set_userdata('gold', $gold);
		$this->session->set_userdata('activities', $activities);
		redirect('/');
	}	

	public function cave()
	{
		//set variables
		$rand = rand(5,10);
		$gold = $this->session->userdata('gold');
		$activities = $this->session->userdata('activities');

		//change variables
		$gold += $rand;
		array_push($activities, "You entered a cave and earned $rand golds ". date("F j Y g:i a")."</br>");

		//reset session to new variables
		$this->session->set_userdata('gold', $gold);
		$this->session->set_userdata('activities', $activities);

		//redirect back to main page
		redirect('/');
	}	

	public function house()
	{
		$rand= rand(2,5);
		$gold = $this->session->userdata('gold');
		$activities = $this->session->userdata('activities');
		$gold += $rand;
		array_push($activities, "You entered a house and earned $rand golds ". date("F j Y g:i a")."</br>");
		$this->session->set_userdata('gold', $gold);
		$this->session->set_userdata('activities', $activities);
		redirect('/');
	}

	public function casino()
	{
		//set variables
		$rand= rand(-50,50);
		$gold = $this->session->userdata('gold');
		$activities = $this->session->userdata('activities');

		//change the variables
		$gold += $rand;
		//two scenarios for activities

		//if they lose money
		if($rand < 0){
			array_push($activities, "You entered a casino and lost " . abs($rand) . " golds ". date("F j Y g:i a")."</br>");
		}

		//or if they gain money
		else{
			array_push($activities, "You entered a casino and earned $rand golds ". date("F j Y g:i a")."</br>");
		}

		//reset the session variables to the new variables we changed
		$this->session->set_userdata('gold', $gold);
		$this->session->set_userdata('activities', $activities);

		//redirect to main page
		redirect('/');
	}	
}
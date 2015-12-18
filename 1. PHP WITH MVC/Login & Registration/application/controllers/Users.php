<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view("Users/welcome");
	} 
	//method for showing register form
	public function new_user()
	{
		$this->load->view("Users/new_user");
	}
	//method for actually creating the user
	public function create()
	{
		//load the model
		$this->load->model("User");

		// //delegate the task of creating user to the model
		$this->User->create($this->input->post());

		//go to the login page
		redirect("/sessions/new");
	}

}
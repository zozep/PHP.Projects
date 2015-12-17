<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
	public function index()
	{
		$response = $this->course->get_all_courses();
		$this->load->view('index', ["courses" => $response]);
	}
	public function delete($id)
	{
		$response = $this->course->confirm($id);
		$this->load->view('delete', ['course' => $response]);
	}
	public function destroy($id)
	{
		$this->course->destroy($id);
		redirect('/');
	}
}
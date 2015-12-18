<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class User extends CI_Model {

	public function create($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES(?,?,?,?,NOW(),NOW())";
		$values = array(
			$post['first_name'],
			$post['last_name'],
			$post['email'],
			password_hash($post['password'], PASSWORD_BCRYPT)
		);
		return $this->db->query($query, $values);
	}

	public function get_user_by_email($email)
	{
		$query = "SELECT * FROM users WHERE email = ?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	} 

	public function validate($post)
	{
		$this->form_validation->set_rules("first_name", "first name", "required");
		$this->form_validation->set_rules("last_name", "last name", "required");
		$this->form_validation->set_rules("email", "email", "required|valid_email");
		$this->form_validation->set_rules("password", "password", "required|matches[password_confirmation]");
		$this->form_validation->set_rules("password_confirmation", "password confirmation", "required");


		return $this->form_validation->run();
		
	}
} 
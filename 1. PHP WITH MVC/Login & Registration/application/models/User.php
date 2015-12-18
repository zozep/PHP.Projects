<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class User extends CI_Controller {

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
} 
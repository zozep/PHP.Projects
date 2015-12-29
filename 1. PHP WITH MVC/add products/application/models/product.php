<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function index()
	{
		$this->load->view('products');
	}

	public function get_all_products()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function create($post)
	{
		$query = "INSERT INTO products (name, price, updated_at) VALUES (?, ?, NOW())";
		$value = array(
			$post['name'],
			$post['price'],
		);
		$this->db->query($query, $value);
	}
	
	public function delete($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query,array($id));
	}	
}
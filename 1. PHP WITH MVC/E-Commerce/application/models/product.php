<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Model {

	public function get_all_products()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function get_product_by_id($id)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}

	public function create($product)
	{
		$query = "INSERT INTO products (description, price, quantity, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$values = array(
			$product['description'],
			$product['price'],
			$product['quantity']
		);
		$this->db->query($query, $values);
	}
}

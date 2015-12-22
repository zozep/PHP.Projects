<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

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
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$values = array(
			$product['name'],
			$product['description'],
			$product['price']
		);
		$this->db->query($query, $values);
	}

	public function delete($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query,array($id));
	}	

	public function update($id)
	{
		$query = "UPDATE products (SET name=? SET description=? SET price=? WHERE id=?)";

		$values = array(
			$product['name'],
			$product['description'],
			$product['price'],
			$product['id']
		);
		$this->db->query($query,array($id));
	}
}
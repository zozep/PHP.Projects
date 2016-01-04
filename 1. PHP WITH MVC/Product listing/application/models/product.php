<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	
	public function get_all_products()
	{
		$query = "SELECT * FROM Products JOIN Manufacturers ON Products.Manufacturer_id = Manufacturers.id";
		// SELECT products.id, products.name, products.price, created_at, manufacturer_id as manufacturer 
					//FROM products LEFT JOIN manufacturers ON products.manufacturer_id = manufacturers.id;
		return $this->db->query($query)->result_array();
	}

	// public function get_id_by_name($name)
	// {
	// 	$query = "SELECT id FROM Manufacturers WHERE Manufacturers.manufacturer_name = ?";
	// 	$id = $this->db->query($query)->row_array();
	// 	return $id[0];
	// }

	public function manufacturer($product)
	{
		
		$query = "INSERT INTO manufacturers (manufacturer_name) VALUES (?)";
		$value = array($product['manufacturer_name']);
		$this->db->query($query, $value);
	}

	public function product($product)
	{
		$this->load->model('Product');
		$id = $this->Product->get_id_by_name($product['manufacturer_name']);
		$query = "INSERT INTO products (product_name, price, created_at, Manufacturer_id) VALUES (?, ?, NOW(), ?)";
		$value = array(
			$product['product_name'],
			$product['price'],
			$id
		);
		$this->db->query($query, $value);
	}


	public function get_id_by_name($name)
	{
		$query = "SELECT id FROM Manufacturers WHERE Manufacturers.manufacturer_name = ?";
		$id = $this->db->query($query, $name)->row_array();
		return $id;
	}
// 	public function delete($id)
// 	{
// 		$this->load->model("Product");
// 		$this->Product->delete($id);
// 		redirect(base_url("products"));
// 	}
// 	public function edit($id)
// 	{
// 		$this->load->view('edit_product_form', ['id' => $id]);
// 	}
// 	public function update($id)
// 	{
// 		$this->load->model("Product");
// 		$product = $this->input->post();
// 		$this->Product->update($product, $id);
// 		redirect(base_url("products"));
// 	}
}
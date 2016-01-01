<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	
	public function get_all_products()
	{
		$query = "SELECT products.id, products.name, products.price, updated_at, manufacturer_id as manufacturer 
					FROM products LEFT JOIN manufacturers ON products.manufacturer_id = manufacturers.id";
		return $this->db->query($query)->result_array();
	}

	public function create($product)
	{
		$query = "INSERT INTO products (name, price, updated_at, manufacturer_id) VALUES (?, ?, NOW(), ?)";
		$value = array(
			$product['name'],
			$product['price'],
			$product['manufacturer_id']
		);
		$this->db->query($query, $value);
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
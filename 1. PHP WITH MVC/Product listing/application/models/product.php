<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	
	public function get_all_products()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

// 	public function show($id)
// 	{
// 		$this->load->model('Product');
// 		$product = $this->Product->get_product_by_id($id);
// 		$this->load->view('single_product_page', array('product' => $product));
// 	}
// 	public function new_product()
// 	{
// 		$this->load->view('new_product_form');
// 	}
// 	public function create()
// 	{
// 		$this->load->model("Product");
// 		$product = $this->input->post();
// 		$this->Product->create($product);
// 		redirect(base_url("products"));
// 	}
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
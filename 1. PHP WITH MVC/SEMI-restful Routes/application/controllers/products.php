<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('Product');
		$products = $this->Product->get_all_products();
		$this->load->view('all_products_page', array('products' => $products));
	}
	public function show($id)
	{
		$this->load->model('Product');
		$product = $this->Product->get_product_by_id($id);
		$this->load->view('single_product_page', array('product' => $product));
	}
	public function new_product()
	{
		$this->load->view('new_product_form');
	}
	public function create()
	{
		$this->load->model("Product");
		$product = $this->input->post();
		$this->Product->create($product);
		redirect(base_url("products"));
	}
	public function delete($id)
	{
		$this->load->model("Product");
		$this->Product->delete($id);
		redirect(base_url("products"));
	}
	public function edit()
	{
		$this->load->view('edit_product_form');
	}
	public function update($id)
	{
		$this->load->model("Product");
		$product = $this->input->post();
		$this->Product->update($id);
		redirect(base_url("products"));
	}
}
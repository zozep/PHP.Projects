<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('Product');
		$products = $this->Product->get_all_products();
		$this->load->view('product', array('products' => $products));
	}
	public function show($id)
	{
		$this->load->model('Product');
		$product = $this->Product->get_product_by_id($id);
		$this->load->view('product_display', array('product' => $product));
	}
	public function new_product()
	{
		$this->load->view('new_product');
	}
	public function create()
	{
		$this->load->model("Product");
		$product = $this->input->post();
		$this->Product->create($product);
		redirect(base_url("products"));
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('Product');
		$products = $this->Product->get_all_products();
		$this->load->view('products', array('products' => $products));
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
}
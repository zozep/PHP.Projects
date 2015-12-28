<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->view('products');
		$products = $this->Product->get_all_products();
		$this->load->view('all_products_page', array('products' => $products));
	}
}
	// public function create()
	// {
	// 	$this->load->model("Product");
	// 	$product = $this->input->post();
	// 	$this->Product->create($product);
	// 	redirect(base_url("products"));
	// }

// 	public function show($id)
// 	{
// 		$this->load->model('Product');
// 		$product = $this->Product->get_product_by_id($id);
// 		$this->load->view('main', array('product' => $product));
// 	}
// }
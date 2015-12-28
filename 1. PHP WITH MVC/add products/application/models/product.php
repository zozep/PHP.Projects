<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function index()
	{
		$this->load->view('products');
	}
}
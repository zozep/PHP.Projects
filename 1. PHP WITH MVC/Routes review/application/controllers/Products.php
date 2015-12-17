<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		echo "This is the Products Index";
	}

	public function show($anythingJoeWantsToCallIt)
	{
		echo "This is the show method of Products";
		echo "You Typed: " . $anythingJoeWantsToCallIt;

	}
	public function edit($anythingJoeWantsToCallIt2)
	{
		echo "This is the Edit method of Products";
		echo "You Typed: " . $anythingJoeWantsToCallIt2;
	}

}
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

	public function new_session()
	{
		echo "This is the new session method";
	}

	public function session_destroy()
	{
		echo "This is the destroy session method of Sessions";
	}
}
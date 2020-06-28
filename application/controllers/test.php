<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('site/cart');
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('site/gioithieu/gt');
	}

}

/* End of file test2.php */
/* Location: ./application/controllers/test2.php */
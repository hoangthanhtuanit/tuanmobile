<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('site/chinhsach/cs');
	}

}

/* End of file test1.php */
/* Location: ./application/controllers/test1.php */
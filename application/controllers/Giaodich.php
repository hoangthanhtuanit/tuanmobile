<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Giaodich extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('site/giaodich');
	}

}

/* End of file Giaodich.php */
/* Location: ./application/controllers/Giaodich.php */
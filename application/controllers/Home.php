<?php
Class Home extends MY_Controller
{
	function index()
	{

		//lay danh sach san pham moi
	    $this->load->model('Products_model');
	    $input = array();
	    $input['limit'] = array(12,0);

	    $product = $this->Products_model->get_list($input);
	    $this->data['product'] = $product;

	    //Lấy ds pk
	    $this->load->model('Phukien_model');
	    $input = array();
	    $input['limit'] = array(6,0);

	    $pk = $this->Phukien_model->get_list($input);
	    $this->data['pk'] = $pk;
		//truyen du lieu cho view
		$this->load->view('site/layout', $this->data);
	}
}
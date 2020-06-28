<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chitiet extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        //load model san pham
        $this->load->model('Products_model');
    }

    // Xem chi tiết sản phẩm
    function view()
    {
        //lay id san pham muon xem
        $id = $this->uri->rsegment(3);
        $product = $this->Products_model->get_info($id);
        if(!$product) redirect();
        $this->data['product'] = $product;
        //Truyền dữ liệu cho view
        $this->load->view('site/chitiet', $this->data);
    }

}

/* End of file Chitiet.php */
/* Location: ./application/controllers/Chitiet.php */
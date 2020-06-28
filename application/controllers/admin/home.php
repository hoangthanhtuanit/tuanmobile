<?php

class home extends MY_Controller {

	public function index()
	{	
		//temp: là template load tung trang 1
		$this->data['temp'] = 'admin/home/index';
		$this->load->view('admin/main', $this->data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
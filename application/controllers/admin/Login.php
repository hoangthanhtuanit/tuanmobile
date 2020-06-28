<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	 function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post())
        {
            $this->form_validation->set_rules('login' ,'login', 'callback_check_login');
            if($this->form_validation->run())
            {
                $this->session->set_userdata('login', true);
                redirect(admin_url('home'));
            }
        }

        $this->load->view('admin/login/index');
    }

    /*
     * Kiem tra username va password co chinh xac khong
     */
    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('Admin_model');
        $where = array('username' => $username , 'password' => $password);
        if($this->Admin_model->check_exists($where))
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Sai tên tài khoản hoặc mật khẩu');
        return false;
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
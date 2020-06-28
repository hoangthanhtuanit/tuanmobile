<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhmuc extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Danhmuc_model');
    }
    //Lấy danh sách danh mục sản phẩm
    public function index()
    {
        $list = $this->Danhmuc_model->get_list();
        $this->data['list'] = $list;

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/Danhmuc/index';
        $this->load->view('admin/main', $this->data);
    }
    /*
     * Them moi du lieu
     */
    function add()
    {
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên danh mục', 'required');

            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name = $this->input->post('name');

                //luu du lieu can them
                $data = array(
                    'name'      => $name
                );
                //them moi vao csdl
                if($this->Danhmuc_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Danhmuc'));
            }
        }

        $this->data['temp'] = 'admin/Danhmuc/add';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Cập nhật du lieu
     */
    function edit()
    {
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
    
        //lay id danh mục
        $id = $this->uri->rsegment(3);
        $info = $this->Danhmuc_model->get_info($id);
        if(!$info)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại danh mục này');
            redirect(admin_url('Danhmuc'));
        }
        $this->data['info'] = $info;
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên danh mục', 'required');
    
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name       = $this->input->post('name');
    
                //luu du lieu can them
                $data = array(
                    'name'      => $name
                );
                //them moi vao csdl
                if($this->Danhmuc_model->update($id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Danhmuc'));
            }
        }
    
        $this->data['temp'] = 'admin/Danhmuc/edit';
        $this->load->view('admin/main', $this->data);
    }
    
    /*
     * Xoa danh mục
     */
    function delete()
    {
        //lay id danh mục
        $id = $this->uri->rsegment('3');
        $info = $this->Danhmuc_model->get_info($id);
        if(!$info)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại danh mục này');
            redirect(admin_url('Danhmuc'));
        }
        //xoa du lieu
        $this->Danhmuc_model->delete($id);
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('Danhmuc'));
    }
}

/* End of file Danhmuc.php */
/* Location: ./application/controllers/Danhmuc.php */
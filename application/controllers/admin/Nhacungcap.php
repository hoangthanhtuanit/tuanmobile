<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhacungcap extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Nhacungcap_model');
	}

	//Lấy danh sách danh mục sản phẩm
    public function index()
    {
        $list = $this->Nhacungcap_model->get_list();
        $this->data['list'] = $list;

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/Nhacungcap/index';
        $this->load->view('admin/main', $this->data);
    }
    //Thêm mới dữ liệu
    function add()
    {
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('tenncc', 'Tên nhà cung cấp', 'required');
            $this->form_validation->set_rules('diachi', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('sdt', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('name', 'Tên người đại diện', 'required');


            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tenncc = $this->input->post('tenncc');
                $diachi = $this->input->post('diachi');
                $sdt = $this->input->post('sdt');
                $email = $this->input->post('email');
                $name = $this->input->post('name');

                //luu du lieu can them
                $data = array(
                    'tenncc'      => $tenncc,
                    'diachi'      => $diachi,
                    'sdt'      => $sdt,
                    'email'      => $email,
                    'name'      => $name
                );
                //them moi vao csdl
                if($this->Nhacungcap_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Nhacungcap'));
            }
        }

        $this->data['temp'] = 'admin/Nhacungcap/add';
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
        $info = $this->Nhacungcap_model->get_info($id);
        if(!$info)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại nhà cung cấp này');
            redirect(admin_url('Nhacungcap'));
        }
        $this->data['info'] = $info;
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('tenncc', 'Tên nhà cung cấp', 'required');
            $this->form_validation->set_rules('diachi', 'Địa chỉ', 'required');
            $this->form_validation->set_rules('sdt', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('name', 'Tên người đại diện', 'required');
    
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tenncc = $this->input->post('tenncc');
                $diachi = $this->input->post('diachi');
                $sdt = $this->input->post('sdt');
                $email = $this->input->post('email');
                $name = $this->input->post('name');
    
                //luu du lieu can them
                $data = array(
                    'tenncc'      => $tenncc,
                    'diachi'      => $diachi,
                    'sdt'      => $sdt,
                    'email'      => $email,
                    'name'      => $name
                );
                //them moi vao csdl
                if($this->Nhacungcap_model->update($id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Nhacungcap'));
            }
        }
    
        $this->data['temp'] = 'admin/Nhacungcap/edit';
        $this->load->view('admin/main', $this->data);
    }
    
    /*
     * Xoa danh mục
     */
    function delete()
    {
        //lay id danh mục
        $id = $this->uri->rsegment('3');
        $info = $this->Nhacungcap_model->get_info($id);
        if(!$info)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại nhà cung cấp này');
            redirect(admin_url('Nhacungcap'));
        }
        //xoa du lieu
        $this->Nhacungcap_model->delete($id);
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('Nhacungcap'));
    }

}

/* End of file Nhacungcap.php */
/* Location: ./application/controllers/Nhacungcap.php */
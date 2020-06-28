<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class thanhvien extends MY_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Thanhvien_model');
	}

	function index(){
		$input = array();
		$list = $this->Thanhvien_model->get_list($input);
		$this->data['list'] = $list;
		$total = $this->Thanhvien_model->get_total();
		$this->data['total'] = $total;
        //Lấy nội dung biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		$this->data['temp'] = 'admin/thanhvien/index';
		$this->load->view('admin/main', $this->data);
	}

	/*
     * Kiểm tra username đã tồn tại chưa
     */
    function check_username()
    {
        $username = $this->input->post('username');
        $where = array('username' => $username);
        //kiêm tra xem username đã tồn tại chưa
        if($this->Thanhvien_model->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
            return false;
        }
        return true;
    }

    // Thêm mới thành viên
    function add()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');

        //Nếu có dữ liệu post lên thì check
        if($this->input->post())
        {
            $this->form_validation->set_rules('fullname', 'Tên', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|callback_check_username');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'trim|required|min_length[10]|max_length[12]');
            $this->form_validation->set_rules('diachi', 'Địa chỉ', 'trim|required');
            if($this->form_validation->run())
            {
                //Thêm vào database
                $fullname = $this->input->post('fullname');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $diachi = $this->input->post('diachi');

                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'phone' =>$phone,
                    'diachi' => $diachi
                );

                if($this->Thanhvien_model->create($data))
                {
                    //Tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }
                else
                {
                     $this->session->set_flashdata('message', 'Không thêm được');
                }
                //Chuyển hướng tới trang danh sách thành viên
                redirect(admin_url('thanhvien'));
            }
        }
        $this->data['temp'] = 'admin/thanhvien/add';
        $this->load->view('admin/main', $this->data);
    }

    //Hàm xử lý chỉnh sửa thành viên viên
    function edit()
    {
        //Lấy id của id cần chỉnh sửa
        $id = $this->uri->rsegment('3');
        $id = intval($id);

        $this->load->library('form_validation');
        $this->load->helper('form');

        //Lấy thông tin của thành viên viên
        $info  = $this->Thanhvien_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên này');
            redirect(admin_url('thanhvien'));
        }
        $this->data['info'] = $info;
        if($this->input->post())
        {
            $this->form_validation->set_rules('fullname', 'Tên', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|callback_check_username');
            $password = $this->input->post('password');
            if($password)
            {
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
            }
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'trim|required|min_length[10]|max_length[12]');
            $this->form_validation->set_rules('diachi', 'Địa chỉ', 'trim|required');

            if($this->form_validation->run())
            {
                //them vao csdl
                $fullname     = $this->input->post('fullname');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $diachi = $this->input->post('diachi');
                $data = array(
                    'fullname'     => $fullname,
                    'username' => $username,
                    'email' => $email,
                    'phone' => $phone,
                    'diachi' => $diachi
                );
                //neu ma thay doi mat khau thi moi gan du lieu
                if($password)
                {
                    $data['password'] = $password;
                }

                if($this->Thanhvien_model->update($id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(admin_url('thanhvien'));
            }
        }
        $this->data['temp'] = 'admin/thanhvien/edit';
        $this->load->view('admin/main', $this->data);
    }

     //Hàm xóa dữ liệu
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->Thanhvien_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
            redirect(admin_url('thanhvien'));
        }
        //thuc hiện xóa
        $this->Thanhvien_model->delete($id);

        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('thanhvien'));
    }
    /*
     * Thuc hien dang xuat
     */
    // function logout()
    // {
    //     if($this->session->userdata('login'))
    //     {
    //         $this->session->unset_userdata('login');
    //     }
    //     redirect(admin_url('login'));
    // }
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
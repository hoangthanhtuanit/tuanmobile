<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sanpham extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sanpham_model');
	}

	public function index()
	{
		 //lay tong so luong ta ca cac san pham trong website
        $total_rows = $this->Sanpham_model->get_total();
        $this->data['total_rows'] = $total_rows;

		//load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = admin_url('Sanpham/index'); //link hien thi ra danh sach san pham
        $config['per_page']   = 5;//so luong san pham hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);

        $segment = $this->uri->segment(4);
        $segment = intval($segment);

        $input = array();
        $input['limit'] = array($config['per_page'], $segment);

        //kiem tra co thuc hien loc du lieu hay khong
        $id = $this->input->get('id');
        $id = intval($id);
        $input['where'] = array();
        if($id > 0)
        {
            $input['where']['id'] = $id;
        }
        $tensp = $this->input->get('tensp');
        if($tensp)
        {
            $input['like'] = array('tensp', $tensp);
        }

        //lay danh sach san pham
        $list = $this->Sanpham_model->get_list($input);
        $this->data['list'] = $list;


        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/Sanpham/index';
        $this->load->view('admin/main', $this->data);
	}

    function add(){
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên sản phẩm', 'required');
            $this->form_validation->set_rules('gia', 'Giá', 'required');
            $this->form_validation->set_rules('soluong', 'Số lượng', 'required');
            $this->form_validation->set_rules('danhmuc', 'Tên danh mục', 'required');

            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name = $this->input->post('name');
                $gia = $this->input->post('gia');
                $gia = str_replace(',', '', $gia);
                $soluong = $this->input->post('soluong');
                $danhmuc = $this->input->post('danhmuc');
                $gpu = $this->input->post('gpu');
                $cpu = $this->input->post('cpu');
                $bonho = $this->input->post('bonho');
                $camera = $this->input->post('camera');
                $mau = $this->input->post('mau');
                $tinhtrangsp = $this->input->post('tinhtrangsp');
                $ram = $this->input->post('ram');
                $manhinh = $this->input->post('manhinh');

                //lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './upload/product';
                $upload_data = $this->upload_library->upload($upload_path, 'anh');  
                $anh = '';
                if(isset($upload_data['file_name']))
                {
                    $anh = $upload_data['file_name'];
                }

                //luu du lieu can them
                $data = array(
                    'name' => $name,
                    'gia' => $gia,
                    'soluong' => $soluong,
                    'danhmuc' => $danhmuc,
                    'gpu' => $gpu,
                    'cpu' => $cpu,
                    'bonho' => $bonho,
                    'camera' => $camera,
                    'mau' => $mau,
                    'tinhtrangsp' => $tinhtrangsp,
                    'ram' => $ram,
                    'manhinh' => $manhinh,
                    'anh' => $anh

                );
                //them moi vao csdl
                if($this->Sanpham_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }
                else
                {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Sanpham'));
            }
        }
        //load view
        $this->data['temp'] = 'admin/Sanpham/add';
        $this->load->view('admin/main', $this->data);
    }

    //Cập nhật sản phẩm
    function edit()
    {
        $id = $this->uri->rsegment('3');
        $product = $this->Sanpham_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
            redirect(admin_url('Sanpham.php'));
        }
        $this->data['product'] = $product;

        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên sản phẩm', 'required');
            $this->form_validation->set_rules('gia', 'Giá', 'required');
            $this->form_validation->set_rules('soluong', 'Số lượng', 'required');
            $this->form_validation->set_rules('danhmuc', 'Tên danh mục', 'required');

            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $name = $this->input->post('name');
                $gia = $this->input->post('gia');
                $gia = str_replace(',', '', $gia);
                $soluong = $this->input->post('soluong');
                $danhmuc = $this->input->post('danhmuc');
                $gpu = $this->input->post('gpu');
                $cpu = $this->input->post('cpu');
                $bonho = $this->input->post('bonho');
                $camera = $this->input->post('camera');
                $mau = $this->input->post('mau');
                $tinhtrangsp = $this->input->post('tinhtrangsp');
                $ram = $this->input->post('ram');
                $manhinh = $this->input->post('manhinh');


                //lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './upload/product';
                $upload_data = $this->upload_library->upload($upload_path, 'image');
                $anh = '';
                if(isset($upload_data['file_name']))
                {
                    $anh = $upload_data['file_name'];
                }

                //luu du lieu can them
                $data = array(
                    'name' => $name,
                    'gia' => $gia,
                    'soluong' => $soluong,
                    'danhmuc' => $danhmuc,
                    'gpu' => $gpu,
                    'cpu' => $cpu,
                    'bonho' => $bonho,
                    'camera' => $camera,
                    'mau' => $mau,
                    'tinhtrangsp' => $tinhtrangsp,
                    'ram' => $ram,
                    'manhinh' => $manhinh,
                    'anh' => $anh

                );
                 if($anh != '')
                {
                    $data['anh'] = $anh;
                }

                //them moi vao csdl
                if($this->Sanpham_model->update($product->id, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Sanpham'));
            }
        }
        //load view
        $this->data['temp'] = 'admin/Sanpham/edit';
        $this->load->view('admin/main', $this->data);
    }

    // Xoa du lieu
    function del()
    {
        $id = $this->uri->rsegment(3);
        $this->_del($id);

        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
        redirect(admin_url('Sanpham'));
    }

    // Xóa nhiều sản phẩm
    function delete_all()
    {
        $ids = $this->input->post('ids');
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
    }

     // Xoa san pham

    private function _del($id)
    {
        $product = $this->Sanpham_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('Sanpham'));
        }
        //thuc hien xoa san pham
        $this->Sanpham_model->delete($id);
    }


}

/* End of file Sanpham.php */
/* Location: ./application/controllers/Sanpham.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{
		 //lay tong so luong ta ca cac san pham trong website
        $total_rows = $this->Products_model->get_total();
        $this->data['total_rows'] = $total_rows;

		//load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac san pham tren website
        $config['base_url']   = admin_url('Products/index'); //link hien thi ra danh sach san pham
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
        $list = $this->Products_model->get_list($input);
        $this->data['list'] = $list;


        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/Products/index';
        $this->load->view('admin/main', $this->data);
	}

    function add(){
        //lay danh sách danh mục
        $this->load->model('Danhmuc_model');
        $input = array();
        $danhmuc = $this->Danhmuc_model->get_list($input);
        foreach ($danhmuc as $row)
        {
            $input['where'] = array('id' => $row->id);
        }
        $this->data['danhmuc'] = $danhmuc;
        //lay danh sach nhacc san pham
        $this->load->model('Nhacungcap_model');
        $input = array();
        $nhacc = $this->Nhacungcap_model->get_list($input);
        foreach ($nhacc as $row)
        {
            $input['where'] = array('id' => $row->id);
        }
        $this->data['nhacc'] = $nhacc;

        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('tensp', 'Tên sản phẩm', 'required');
            $this->form_validation->set_rules('title', 'Tiêu đề sản phẩm', 'required');
            $this->form_validation->set_rules('mota', 'Mô tả', 'required');
            $this->form_validation->set_rules('gia', 'Giá', 'required');
            $this->form_validation->set_rules('soluong', 'Số lượng', 'required');
            $this->form_validation->set_rules('bangthong', 'Băng thông', 'required');
            $this->form_validation->set_rules('cpu', 'Cpu', 'required');
            $this->form_validation->set_rules('bonho', 'Bộ nhớ', 'required');
            $this->form_validation->set_rules('baomat', 'Bảo mật', 'required');
            $this->form_validation->set_rules('ram', 'Ram', 'required');
            $this->form_validation->set_rules('cambien', 'Cảm biến', 'required');
            $this->form_validation->set_rules('pin', 'Pin', 'required');
            $this->form_validation->set_rules('manhinh', 'Màn hình', 'required');
            $this->form_validation->set_rules('camtruoc', 'Camera truoc', 'required');
            $this->form_validation->set_rules('camsau', 'Camera sau', 'required');
            $this->form_validation->set_rules('sim', 'Sim', 'required');
            $this->form_validation->set_rules('mau', 'Màu', 'required');
            $this->form_validation->set_rules('tinhtrangsp', 'Tình trạng sản phẩm', 'required');
            $this->form_validation->set_rules('anh', 'Ảnh sản phẩm', 'required');
            $this->form_validation->set_rules('khuyenmai', 'Khuyến mãi', 'required');
            $this->form_validation->set_rules('danhmuc', 'Tên danh mục', 'required');
            $this->form_validation->set_rules('nhacc', 'Nhà cung cấp', 'required');
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
                //them vao csdl
                $tensp = $this->input->post('tensp');
                $title = $this->input->post('title');
                $mota = $this->input->post('mota');
                $gia = $this->input->post('gia');
                $gia = str_replace(',', '', $gia);
                $soluong = $this->input->post('soluong');
                $bangthong = $this->input->post('bangthong');
                $cpu = $this->input->post('cpu');
                $bonho = $this->input->post('bonho');
                $ram = $this->input->post('ram');
                $cambien =$this->input->post('cambien');
                $pin = $this->input->post('pin');
                $manhinh = $this->input->post('manhinh');
                $camtruoc = $this->input->post('camtruoc');
                $camsau = $this->input->post('camsau');
                $sim = $this->input->post('sim');
                $mau = $this->input->post('mau');
                $tinhtrangsp = $this->input->post('tinhtrangsp');
                $khuyenmai = $this->input->post('khuyenmai');

                // //lay ten file anh minh hoa duoc update len
                // $this->load->library('Upload_library');
                // $upload_path = './upload/product';
                // $upload_data = $this->Upload_library->upload($upload_path, 'anh');
                // pre($upload_path);
                // $anh = '';
                // if(isset($upload_data['file_name']))
                // {
                //     $anh = $upload_data['file_name'];
                // }

                //luu du lieu can them
                $data = array(
                    'tensp'      => $tensp,
                    'title' => $title,
                    'mota' => $mota,
                    'gia' => $gia,
                    'soluong' => $soluong,
                    'bangthong' => $bangthong,
                    'cpu' => $cpu,
                    'bonho' => $bonho,
                    'baomat' => $baomat,
                    'ram' => $ram,
                    'cambien' => $cambien,
                    'pin' => $pin,
                    'manhinh' => $manhinh,
                    'camtruoc' => $camtruoc,
                    'camsau' => $camsau,
                    'sim' => $sim,
                    'mau' => $mau,
                    'tinhtrangsp' => $tinhtrangsp,
                    // 'anh' => $anh,
                    'khuyenmai' => $khuyenmai

                );
                //them moi vao csdl
                if($this->Products_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }
                else
                {
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Products'));
            }
        }
        //load view
        $this->data['temp'] = 'admin/Products/add';
        $this->load->view('admin/main', $this->data);
    }

    // Xoa du lieu
    function del()
    {
        $id = $this->uri->rsegment(3);
        $this->_del($id);

        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
        redirect(admin_url('Products'));
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
        $product = $this->Products_model->get_info($id);
        if(!$product)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'không tồn tại sản phẩm này');
            redirect(admin_url('Products'));
        }
        //thuc hien xoa san pham
        $this->Products_model->delete($id);
    }

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */
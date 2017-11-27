<?php
if (!defined('BASEPATH'))
    exit('Woa...Not find system folder');

/* -----------------------------------------------
  # Rao_vat version 1.0
  # Admin team Controler
  # Extends CI_Controller
  # Author: Nguyen Duc Hung - http://tinagroup.net
  # Create date: 26/05/2011
  ------------------------------------------------ */
require_once APPPATH . 'third_party/admin_controller' . EXT;

class Team extends Admin_controller {

    function __construct() {

        parent:: __construct();

        $this->check_login();

        $this->load->model('team/team_model', 'team');
        $this->load->helper('date');
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1', 'basePath' => base_url() . "ckeditor/", 'outPut' => true));
    }

    public function index() {

        $data = array();
        $del = $this->input->post('selected');
        $act = $this->input->post('act');
        if ($act == 'act_del') {
            if ($del) {
                if (gettype($del) == 'array' && count($del > 0)) {
                    foreach ($del as $id) {
                        $q = $this->team->get_image($id);
                        unlink($q);
                        $this->team->delete($id);
                    }
                }
            } else {
                $this->session->set_flashdata('warning', 'Bạn chọn ít nhất 1 bản tin để xóa');
                redirect('admin/team');
            }
            $this->session->set_flashdata('warning', 'Đã xóa các bản tin thành công');
            redirect('admin/team');
        }

        // Config pagination
        $config['base_url'] = base_url() . 'admin/team/index';
        $config['total_rows'] = $this->team->total();
        $config['per_page'] = 20;
        $config['uri_segment'] = 4;
        //$config['page_query_string'] = TRUE;
        //$config['query_string_segment'] = 'page';
        $config['num_links'] = 10;
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        
        $data['teams'] = $this->team->getList(array('name', 'id', 'position', 'image', 'ord'), null, array('id' => 'desc'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(4)));
        $data['render_path'] = array('Admin' => $this->index_url . 'admin', 'Danh sách team' => '#');
        $data['heading_title'] = 'Danh sách team';
        $data['total_record'] = $this->team->total();
        $data['action_del'] = $this->index_url . 'admin/team';

        $data['url_edit'] = $this->index_url . 'admin/team/add_edit';
        $data['url_del'] = $this->index_url . 'admin/team/delete';

        $this->render($this->load->view('admin/team/index', $data, TRUE));
    }

    public function add_edit() {
        $data['render_path'] = array('Admin' => $this->index_url . 'admin', 'Team' => $this->index_url . 'admin/team', 'Thêm mới - cập nhật tin tức' => '#');
        $data['heading_title'] = 'Thêm mới - cập nhật team';
        $data['action'] = $this->index_url . 'admin/team/add_edit';

        $this->valid->set_rules('name', 'Name', 'trim|required');
        $data['name'] = $this->input->post('name');
        $data['position'] = $this->input->post('position');
        $data['infoface'] = $this->input->post('infoface');
        $data['infotweeter'] = $this->input->post('infotweeter');
        $data['infogoole'] = $this->input->post('infogoole');
        $data['infolinkin'] = $this->input->post('infolinkin');
        $data['description'] = $this->input->post('description');
        $data['ord'] = $this->input->post('ord');
        $id = $this->input->post('id');
        $oldImage = $this->input->post('oldImage');
        if ($this->valid->run() == TRUE) {
            if ($_FILES['image_team']['name'] != '') {
                $file_field = $_FILES['image_team']['name'];
                $file_name_field = 'image_team';
                $upload_path = $this->config->item('upload_news_dir');

                if ($result = $this->util->upload($upload_path, 1024, 1024, $file_field, $file_name_field)) {
                    $filepath = $result['full_path'];
                    $filename = $result['file_name'];
                    $data['image'] = $upload_path . $filename;
                    if ($oldImage != '') {
                        $this->deleteFile($oldImage);
                    }
                }
            } else {
                if ($oldImage != '') {
                    $data['image'] = $oldImage;
                } else {
                    $data['image'] = '';
                }
            } // End upload file
            if ($id && $id != '') {
                if ($this->team->update($id, $data)) {
                    $this->session->set_flashdata('warning', 'Cập nhật nội dung thành công');
                    redirect('admin/team/add_edit/' . $id);
                } else {
                    $this->session->set_flashdata('warning', 'Cập nhật nội dung thất bại');
                    redirect('admin/team/add_edit/' . $id);
                }
            } else {
                if ($this->team->add($data)) {
                    $this->session->set_flashdata('warning', 'Thêm mới nội dung thành công');
                    redirect('admin/team');
                } else {
                    $this->session->set_flashdata('warning', 'Thêm mới nội dung thất bại');
                    redirect('admin/team');
                }
            } // End action submit
        }
        $_id = $this->uri->segment(4);

        if ($_id) {
            $data['q'] = $this->team->read($_id);
        }
        $this->tinyMCE = 'desc';
        $this->render($this->load->view('admin/team/create_form', $data, TRUE));
    }

    public function delete() {

        $pid = (int) $this->uri->segment(4);

        $q = $this->team->get_image($pid);

        if ($q) {
            unlink($q);
        }

        if ($this->team->delete($pid)) {
            $this->session->set_flashdata('warning', 'Xóa nội dung thành công');
            redirect('admin/team');
        } else {
            $this->session->set_flashdata('warning', 'Xóa nội dung thất bại');
            redirect('admin/team');
        }
    }

}
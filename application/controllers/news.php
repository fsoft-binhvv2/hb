<?php

if (!defined('BASEPATH'))
    exit('Woa...Not find system folder');
/* -----------------------------------------------
  # Rao_vat version 1.0
  # Home Controler
  # Extends CI_Controller
  # Author: Nguyen Duc Hung - http://tinagroup.net
  # Create date: 28/04/2011
  ------------------------------------------------ */
require_once APPPATH . 'third_party/public_controller' . EXT;

class News extends Public_controller {

    function __construct() {
        parent:: __construct();
        $this->load->library('ajax_pagination');
    }

    public function index() {
        $data = array();
        $data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Tin tức' => site_url('tin-tuc'));
        $this->site_title = 'Tin tức  ';
        $data['url_view'] = 'xem-tin/';
        $config['base_url'] = $this->index . 'tin-tuc/';
        $config['total_rows'] = $this->tin->getList(array('id', 'title', 'create_date', 'modify_date', 'image', 'intro'), array('type' => 0), array('id' => 'DESC'), null)->num_rows();
        $config['uri_segment'] = 2;
        //$config['page_query_string'] = TRUE;
        //$config['query_string_segment'] = 'page';
        $config['per_page'] = 10;
        $config['num_links'] = 10;
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $data['news'] = $this->tin->getList(array('id', 'title', 'create_date', 'modify_date', 'image', 'intro'), array('type' => 0), array('id' => 'DESC'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(2)))->result();
        $this->render($this->load->view('tin_tuc/index', $data, TRUE), '3col');
    }

    public function detail() {
        $uri = $this->uri->segment(2);
        $uri = explode("-", $uri);
        $id = (int) $uri[0];
        $data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Tin tức' => site_url('tin-tuc'));
        $this->site_title = 'Tin tức | ' . $this->tin->get_title($id);
        $data['news'] = $this->tin->read($id);
        $data['other_news'] = $this->tin->getList(array('id', 'title', 'create_date'), array('id !=' => $id, 'type' => 0), array('id' => 'DESC'), array('max' => 10, 'begin' => 0))->result();
        $data['url_view'] = 'xem-tin/';
        $this->render($this->load->view('tin_tuc/page_view', $data, TRUE), '3col');
    }

    public function huongdan() {

        $data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Hướng dẫn' => site_url('tin-tuc'));
        $this->render($this->load->view('tin_tuc/huongdan', $data, TRUE), '3col');
    }

    public function chitiet_huongdan() {
        $uri = $this->uri->segment(2);
        $uri = explode("-", $uri);
        $id = (int) $uri[0];
        $data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Hướng dẫn' => site_url('huong-dan'));

        $this->site_title = 'Hướng dẫn | ' . $this->tin->get_title($id);
        $data['news'] = $this->tin->read($id);
        $data['other_news'] = $this->tin->getList(array('id', 'title', 'create_date'), array('id !=' => $id, 'type' => 1), array('id' => 'DESC'), array('max' => 10, 'begin' => 0))->result();
        $data['url_view'] = 'huong-dan/';

        $this->render($this->load->view('tin_tuc/chitiet_huongdan', $data, TRUE), '3col');
    }

    public function lienhe() {
        $this->load->library('form_validation');

        $data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Tin tức' => site_url('tin-tuc'));
        $md5_hash = md5(rand(0, 999));
        $security_code = substr($md5_hash, 15, 5);
        $this->session->set_userdata('security_code', $security_code);
        $q = $this->db->get('introduc')->row();
        $data['content'] = $q->content;
        $this->render($this->load->view('tin_tuc/lienhe', $data, TRUE), '3col');
    }

    function guilienhe() {
        $data['title'] = "Gửi liên hệ";
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hoten', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('noidung', 'Content', 'trim|required');

        $this->form_validation->set_rules('capcha', 'Mã xác nhận', 'trim|required');
        if ($this->form_validation->run() == False) {
            $q = $this->db->get('introduc')->row();
            $data['content'] = $q->content;

            $this->render($this->load->view('tin_tuc/lienhe', $data, TRUE), '3col');
        } else {
            $maxacnhan = $this->input->post('capcha');
            if ($maxacnhan == $this->session->userdata('security_code')) {
                $this->tin->lienhe();
                redirect('send-thanh-cong');
            } else {
                $data['loicapcha'] = 'Nhập mã capcha không đúng.';
                $this->render($this->load->view('tin_tuc/lienhe', $data, TRUE), '3col');
            }
        }
    }

    function sendthanhcong() {

        //$data['laydanhmuctintin']=$this->tintuc_model->laydanhmuctintin();
        $data['title'] = "Liên hệ";
        $q = $this->db->get('introduc')->row();
        $data['content'] = $q->content;
        $this->render($this->load->view('tin_tuc/lienhethanhcong', $data, TRUE), '3col');
    }

}

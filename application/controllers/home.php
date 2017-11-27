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

class Home extends Public_controller {

    function __construct() {

        parent:: __construct();
    }

    public function index() {
       // $this->output->enable_profiler(TRUE);
        $data = array();
        $data['featureFee'] = $this->danhmucdichvu->get_danhmucdichvu_where(array('active' => 1), array('ord' => 'asc'), array('max' => 4, 'begin' => 0));
        $data['featureNotFee'] = $this->danhmucdichvu->get_danhmucdichvu_where(array('active' => 0), array('ord' => 'asc'), array('max' => 4, 'begin' => 0));
        $data['scholarship'] = $this->scholarship->get_scholarship_where(array('home' => 1), array('order' => 'asc'), array('max' => 3, 'begin' => 0));
        $data['team'] = $this->team->get_team_where(null, array('ord' => 'asc'), array('max' => 4, 'begin' => 0));
        $data['news'] = $this->news->get_news_where(array('active' => 1), array('modify_date' => 'desc'), array('max' => 5, 'begin' => 0));
        $this->render($this->load->view('home', $data, TRUE), '3col');
    }

    public function khamphahocbong() {
       // $this->output->enable_profiler(TRUE);
        $data = array();
        $data['country'] = $this->country->get_country_where(null, array('order' => 'asc'), null);
        $data['brand'] = $this->brand->get_brand_where(null, array('order' => 'desc'), null);
        $data['university'] = $this->university->get_university_where(null, array('order' => 'desc'), null);
        $config['base_url'] = base_url() . 'home/khamphahocbong';
        $config['total_rows'] = $this->scholarship->totals();
        $config['per_page'] = 1;
        $config['uri_segment'] = 3;
        $config['num_links'] = 10;
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $data['scholarship'] = $this->scholarship->get_scholarship_where(null, array('order' => 'asc'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(3)));
        $this->render($this->load->view('khamphahocbong', $data, TRUE), '3col');
    }
    public function chitiethocbong($id) {
        $this->output->enable_profiler(TRUE);
        $data = array();
        
        $data['scholarship'] = $this->scholarship->get_by_id($id);
//        echo "<pre>";
//        print_r($data['scholarship']);
//        echo "</pre>";
        $this->render($this->load->view('chitiethocbong', $data, TRUE), '3col');
    }
    public function trang404() {
        $data = array();
        $this->load->view('trang404', $data);
    }

}

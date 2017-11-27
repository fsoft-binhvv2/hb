<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Product Controler
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 17/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/public_controller'.EXT;

class Introduc extends Public_controller {

	function __construct() {
		
		parent:: __construct();	
	}
	
	public function index() {
		$data['render_path'] = array('Trang chủ' => site_url('trang-chu'), 'Giới thiệu Cân Chính Tâm' => site_url('#'));
		$this->site_title = 'Giới thiệu | '. $this->site_title;
		
		$q = $this->db->get('introduc')->row();
		$data['content'] = $q->content;
		
		$this->render($this->load->view('page_other', $data, TRUE), '3col');
	}
}
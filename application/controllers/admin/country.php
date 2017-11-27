<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Category controller
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 02/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/admin_controller'.EXT;

class Country extends Admin_controller {

	public function __construct() {
		
		parent:: __construct();
		
		// Check login
		$this->check_login();
		
		// Load model
		$this->load->model('country/country_model', 'country');
		
	}
	
	public function index() {
	
		$data = array();
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục quốc gia' => $this->index_url.'admin/country');
		$data['heading_title'] = 'Quản lý quốc gia';
		$data['url_create'] = $this->index_url.'admin/country/add_edit';
		$data['action'] = $this->index_url.'admin/country';
		
		$del = $this->input->post('selected');

		if($this->input->post('act') == 'act_del') {
			
			if($del) {
			
				if(gettype($del) == 'array' && count($del) > 0) {
				
					foreach($del as $id) {
						
						if($this->country->delete($id)) {
							$this->session->set_flashdata('warning', 'Xóa quốc gia thành công');
							redirect('admin/country');
						} else {
							$this->session->set_flashdata('warning', 'Có lỗi xảy ra rồi');
							redirect('admin/country');
						}
						
					} //End foreach
				
				} // End if
			
			} else {
				$this->session->set_flashdata('warning', 'Cần chọn ít nhất 1 bản tin để xóa');
				redirect('admin/country');
			}
			
		}
		
		/// Config pagination
		$config['base_url'] = $this->index_url.'admin/country/index';
		$config['total_rows'] = $this->country->totals();
		$config['uri_segment'] = 4;
		//$config['page_query_string'] = TRUE;
		//$config['query_string_segment'] = 'page';
		$config['per_page'] = 20;
		$config['num_links'] = 8;
		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();
		$data['total_record'] = $this->country->totals();		
		
		$article = $this->country->get_country_where(null, array('id' => 'DESC'), array('max' => $config['per_page'] , 'begin' => $this->uri->segment(4)));
			foreach($article->result() as $result) {			
				$data['lists'][] = array(
					'id' 		=> $result->id,
					'name'		=> $result->name,
					'alias' 		=> $result->alias,				
                                      //  'parent' 		=> $result->parent,
                                        'order' 		=> $result->order,
					'url_edit'	=> $this->index_url.'admin/country/add_edit/'.$result->id,
					'url_del'	=> $this->index_url.'admin/country/delete/'.$result->id
				);
			}
		
		
		$this->render($this->load->view('admin/country/index', $data, TRUE));
	
	}
	
	
	public function add_edit() {
		
		$this->permission_edit_del();
		
		$_id = $this->uri->segment(4);
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục quốc gia' => $this->index_url.'admin/country');
		$data['heading_title'] = 'Tạo - Cập nhật danh mục';
		$data['action'] = $this->index_url.'admin/country/add_edit';
		
		$this->valid->set_rules('name', 'Name', 'trim|required');
		 
		$data['name'] = $this->input->post('name');
		$data['alias'] = $this->util->alias($data['name']);
		//$data['show_home'] = ($this->input->post('show_home') == 'on') ? 1 : 0;				
                //$data['parent'] = $this->input->post('parent');
		$id = (int)$this->input->post('id');
		$data['order'] = $this->input->post('order');
		if($this->form_validation->run() == TRUE) {
			
			if($id) {
			
				if($this->country->update($id,$data)) {
					$this->session->set_flashdata('warning', 'Cập nhật Danh mục thành công');
					redirect('admin/country/add_edit/'.$id);
				} else {
					$this->session->set_flashdata('warning', 'Có lỗi rồi');
					redirect('admin/country/add_edit');
				}
			} else {
				
					if($this->country->add($data)) {
						$this->session->set_flashdata('warning', 'Thêm mới Danh mục thành công');
						redirect('admin/country');
					} else {
						$this->session->set_flashdata('warning', 'Có lỗi rồi');
						redirect('admin/country/add_edit');
					}
				
			}
			
		}
		
		if($_id !='') $data['article'] = $this->country->get_by_id($_id);
		//$data['root'] = $this->country->get_root_country(0);
		//$sql="select * from country where parent=0";	        $data['cat']= $this->db->query($sql)->result();
		$this->render($this->load->view('admin/country/country_form', $data, TRUE));
		
	}
	
	
	function delete(){
		
		$this->permission_edit_del();
		
		$id = $this->uri->segment(4);
		/*if($this->country->parent_exists($id)) {
			$this->session->set_flashdata('message', 'Bạn cần xóa danh mục con trước khi xóa!');
			redirect('admin/country');
		} else {
		*/
			if($this->country->delete($id)) {
				$this->session->set_flashdata('warning', 'Xóa danh mục thành công!');
				redirect('admin/country');
			} else {
				$this->session->set_flashdata('warning', 'Xóa danh mục Thất bại!');
				redirect('admin/country');
			}
		//}
	
	}
	

}
/* End file */
/* Local application/controllers/admin/country.php */
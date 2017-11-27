<?php if(!defined('BASEPATH')) exit('Woa...Not find system folder');

/*-----------------------------------------------
# Rao_vat version 1.0
# Category controller
# Extends CI_Controller
# Author: Nguyen Duc Hung - http://tinagroup.net
# Create date: 02/05/2011
------------------------------------------------*/
require_once APPPATH.'third_party/admin_controller'.EXT;

class brand extends Admin_controller {

	public function __construct() {
		
		parent:: __construct();
		
		// Check login
		$this->check_login();
		
		// Load model
		$this->load->model('brand/brand_model', 'brand');
		
	}
	
	public function index() {
	
		$data = array();
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục nghành học' => $this->index_url.'admin/brand');
		$data['heading_title'] = 'Quản lý nghành học';
		$data['url_create'] = $this->index_url.'admin/brand/add_edit';
		$data['action'] = $this->index_url.'admin/brand';
		
		$del = $this->input->post('selected');

		if($this->input->post('act') == 'act_del') {
			
			if($del) {
			
				if(gettype($del) == 'array' && count($del) > 0) {
				
					foreach($del as $id) {
						
						if($this->brand->delete($id)) {
							$this->session->set_flashdata('warning', 'Xóa trường thành công');
							redirect('admin/brand');
						} else {
							$this->session->set_flashdata('warning', 'Có lỗi xảy ra rồi');
							redirect('admin/brand');
						}
						
					} //End foreach
				
				} // End if
			
			} else {
				$this->session->set_flashdata('warning', 'Cần chọn ít nhất 1 bản tin để xóa');
				redirect('admin/brand');
			}
			
		}
		
		/// Config pagination
		$config['base_url'] = $this->index_url.'admin/brand/index';
		$config['total_rows'] = $this->brand->totals();
		$config['uri_segment'] = 4;
		//$config['page_query_string'] = TRUE;
		//$config['query_string_segment'] = 'page';
		$config['per_page'] = 20;
		$config['num_links'] = 8;
		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();
		$data['total_record'] = $this->brand->totals();		
		
		$article = $this->brand->get_brand_where(null, array('id' => 'DESC'), array('max' => $config['per_page'] , 'begin' => $this->uri->segment(4)));
			foreach($article->result() as $result) {			
				$data['lists'][] = array(
					'id' 		=> $result->id,
					'name'		=> $result->name,
					'alias' 		=> $result->alias,				
                                        'id_university' 		=> $result->id_university,
                                        'order' 		=> $result->order,
					'url_edit'	=> $this->index_url.'admin/brand/add_edit/'.$result->id,
					'url_del'	=> $this->index_url.'admin/brand/delete/'.$result->id
				);
			}
		
		
		$this->render($this->load->view('admin/brand/index', $data, TRUE));
	
	}
	
	
	public function add_edit() {
		
		$this->permission_edit_del();
		
		$_id = $this->uri->segment(4);
		$data['render_path'] = array('Admin' => $this->index_url.'admin', 'Danh mục nghành học' => $this->index_url.'admin/brand');
		$data['heading_title'] = 'Tạo - Cập nhật danh mục';
		$data['action'] = $this->index_url.'admin/brand/add_edit';
		
		$this->valid->set_rules('name', 'Name', 'trim|required');
		 
		$data['name'] = $this->input->post('name');
		$data['alias'] = $this->util->alias($data['name']);
		//$data['show_home'] = ($this->input->post('show_home') == 'on') ? 1 : 0;				
                $data['id_university'] = $this->input->post('id_university');
		$id = (int)$this->input->post('id');
		$data['order'] = $this->input->post('order');
		if($this->form_validation->run() == TRUE) {
			
			if($id) {
			
				if($this->brand->update($id,$data)) {
					$this->session->set_flashdata('warning', 'Cập nhật Danh mục thành công');
					redirect('admin/brand/add_edit/'.$id);
				} else {
					$this->session->set_flashdata('warning', 'Có lỗi rồi');
					redirect('admin/brand/add_edit');
				}
			} else {
				
					if($this->brand->add($data)) {
						$this->session->set_flashdata('warning', 'Thêm mới Danh mục thành công');
						redirect('admin/brand');
					} else {
						$this->session->set_flashdata('warning', 'Có lỗi rồi');
						redirect('admin/brand/add_edit');
					}
				
			}
			
		}
		
		if($_id !='') $data['article'] = $this->brand->get_by_id($_id);
		//$data['root'] = $this->brand->get_root_brand(0);
		$sql="select * from university";	        $data['cat']= $this->db->query($sql)->result();
		$this->render($this->load->view('admin/brand/brand_form', $data, TRUE));
		
	}
	
	
	function delete(){
		
		$this->permission_edit_del();
		
		$id = $this->uri->segment(4);
		/*if($this->brand->parent_exists($id)) {
			$this->session->set_flashdata('message', 'Bạn cần xóa danh mục con trước khi xóa!');
			redirect('admin/brand');
		} else {
		*/
			if($this->brand->delete($id)) {
				$this->session->set_flashdata('warning', 'Xóa danh mục thành công!');
				redirect('admin/brand');
			} else {
				$this->session->set_flashdata('warning', 'Xóa danh mục Thất bại!');
				redirect('admin/brand');
			}
		//}
	
	}
	

}
/* End file */
/* Local application/controllers/admin/brand.php */
<?php

if (!defined('BASEPATH'))
    exit('Woa...Not find system folder');

/* -----------------------------------------------
  # Rao_vat version 1.0
  # Category controller
  # Extends CI_Controller
  # Author: Nguyen Duc Hung - http://tinagroup.net
  # Create date: 02/05/2011
  ------------------------------------------------ */
require_once APPPATH . 'third_party/admin_controller' . EXT;

class scholarship extends Admin_controller {

    public function __construct() {

        parent:: __construct();

        // Check login
        $this->check_login();

        // Load model
        $this->load->model('scholarship/scholarship_model', 'scholarship');
        $this->load->helper('date');
        $this->load->library('ckeditor', array('instanceName' => 'CKEDITOR1', 'basePath' => base_url() . "ckeditor/", 'outPut' => true));
    }

    public function index() {

        $data = array();
        $data['render_path'] = array('Admin' => $this->index_url . 'admin', 'Danh mục học bổng' => $this->index_url . 'admin/scholarship');
        $data['heading_title'] = 'Quản lý học bổng';
        $data['url_create'] = $this->index_url . 'admin/scholarship/add_edit';
        $data['action'] = $this->index_url . 'admin/scholarship';

        $del = $this->input->post('selected');

        if ($this->input->post('act') == 'act_del') {

            if ($del) {

                if (gettype($del) == 'array' && count($del) > 0) {

                    foreach ($del as $id) {

                        if ($this->scholarship->delete($id)) {
                            $this->session->set_flashdata('warning', 'Xóa trường thành công');
                            redirect('admin/scholarship');
                        } else {
                            $this->session->set_flashdata('warning', 'Có lỗi xảy ra rồi');
                            redirect('admin/scholarship');
                        }
                    } //End foreach
                } // End if
            } else {
                $this->session->set_flashdata('warning', 'Cần chọn ít nhất 1 bản tin để xóa');
                redirect('admin/scholarship');
            }
        }

        /// Config pagination
        $config['base_url'] = $this->index_url . 'admin/scholarship/index';
        $config['total_rows'] = $this->scholarship->totals();
        $config['uri_segment'] = 4;
        //$config['page_query_string'] = TRUE;
        //$config['query_string_segment'] = 'page';
        $config['per_page'] = 20;
        $config['num_links'] = 8;
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $data['total_record'] = $this->scholarship->totals();

        $article = $this->scholarship->get_scholarship_where(null, array('id' => 'DESC'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(4)));
        foreach ($article->result() as $result) {
            $data['lists'][] = array(
                'id' => $result->id,
                'name' => $result->name,
                'university_name' => $result->university_name,
                'alias' => $result->alias,
                'university_id' => $result->university_id,
                'deadline' => $result->deadline,
                'link' => $result->link,
                'Institution' => $result->Institution,
                'Fieldofstudy' => $result->Fieldofstudy,
                'Eligibility' => $result->Eligibility,
                'Applicationinstructions' => $result->Applicationinstructions,
                'Otherinformation' => $result->Otherinformation,
                'image' => $result->image,
                'type_scholarship_str' => $result->type_scholarship_str,
                'id_country' => $result->id_country,
                'order' => $result->order,
                'url_edit' => $this->index_url . 'admin/scholarship/add_edit/' . $result->id,
                'url_del' => $this->index_url . 'admin/scholarship/delete/' . $result->id
            );
        }


        $this->render($this->load->view('admin/scholarship/index', $data, TRUE));
    }

    public function add_edit() {

        $this->permission_edit_del();

        $_id = $this->uri->segment(4);
        $data['render_path'] = array('Admin' => $this->index_url . 'admin', 'Danh mục học bổng' => $this->index_url . 'admin/scholarship');
        $data['heading_title'] = 'Tạo - Cập nhật danh mục';
        $data['action'] = $this->index_url . 'admin/scholarship/add_edit';

        $this->valid->set_rules('name', 'Name', 'trim|required');

        $data['name'] = $this->input->post('name');
        $data['alias'] = $this->util->alias($data['name']);
        //$data['show_home'] = ($this->input->post('show_home') == 'on') ? 1 : 0;				

        
        $data['university_id'] = $this->input->post('university_id');
        $data['deadline'] = $this->input->post('deadline');
        $data['link'] = $this->input->post('link');
        $data['Institution'] = $this->input->post('Institution');
        $data['Fieldofstudy'] = $this->input->post('Fieldofstudy');
        $data['Eligibility'] = $this->input->post('Eligibility');
        $data['Applicationinstructions'] = $this->input->post('Applicationinstructions');
        $data['Otherinformation'] = $this->input->post('Otherinformation');
        $data['image'] = $this->input->post('image');

        $type_scholarship_str = $this->input->post('type_scholarship_str');
        $string_type_scholarship = "";
        if (is_array($type_scholarship_str)) {
            foreach ($type_scholarship_str as $kqtype_scholarship_str) {
                if ($string_type_scholarship != "") {
                    $string_type_scholarship = $string_type_scholarship . "," . $kqtype_scholarship_str;
                } else {
                    $string_type_scholarship = $string_type_scholarship . $kqtype_scholarship_str;
                }
            }
        }
        
        $id_country_str = $this->input->post('country_str');
        $string_id_country = "";
        if (is_array($id_country_str)) {
            foreach ($id_country_str as $kqid_country_str) {
                if ($string_id_country != "") {
                    $string_id_country = $string_id_country . "," . $kqid_country_str;
                } else {
                    $string_id_country = $string_id_country . $kqid_country_str;
                }
            }
        }
        $data['id_country_str'] = $string_id_country;
        
        $id_brand_str = $this->input->post('brand_str');
        $string_id_brand = "";
        if (is_array($id_brand_str)) {
            foreach ($id_brand_str as $kqid_brand_str) {
                if ($string_id_brand != "") {
                    $string_id_brand = $string_id_brand . "," . $kqid_brand_str;
                } else {
                    $string_id_brand = $string_id_brand . $kqid_brand_str;
                }
            }
        }
        $data['id_brand_str'] = $string_id_brand;
        
        $data['type_scholarship_str'] = $string_type_scholarship;
        $data['id_country'] = $this->input->post('id_country');
        $id = (int) $this->input->post('id');
        $oldImage = $this->input->post('oldImage');
        $data['order'] = $this->input->post('order');
        if ($this->form_validation->run() == TRUE) {
            if ($_FILES['image']['name'] != '') {
                $file_field = $_FILES['image']['name'];
                $file_name_field = 'image';
                $upload_path = $this->config->item('upload_news_dir');
                if ($result = $this->util->upload($upload_path, 1024, 1024, $file_field, $file_name_field)) {
                    $filepath = $result['full_path'];
                    $filename = $result['file_name'];
                    $data['image'] = $upload_path . $filename;
                    // Delete image old if it's exist
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


            if ($id) {
                
                if ($this->scholarship->update($id, $data)) {
                    $this->db->query("update scholarship a,university b set a.university_name=b.name  where a.university_id=b.id and a.id= $id ");
                    $this->db->query("DELETE FROM `scholarship_brand` WHERE id_scholarship= $id ");
                    $this->db->query("DELETE FROM `scholarship_country` WHERE id_scholarship= $id ");
                    if (is_array($id_country_str)) {
                        foreach ($id_country_str as $kqid_country_str) {
                            $this->db->query("INSERT INTO `scholarship_country`(`id_scholarship`, `id_country`) VALUES ($id,$kqid_country_str)");
                        }
                    }
                    if (is_array($id_brand_str)) {
                        foreach ($id_brand_str as $kqid_brand_str) {
                            $this->db->query("INSERT INTO `scholarship_brand`(`id_scholarship`, `id_brand`) VALUES ($id,$kqid_brand_str)");
                        }
                    }
                    $this->db->query("update brand a,scholarship_brand b set b.name_brand=a.name  where a.id=b.id_brand and b.id_scholarship= $id ");
                    $this->db->query("update country a,scholarship_country b set b.name_country=a.name  where a.id=b.id_country and b.id_scholarship= $id ");
                    $this->session->set_flashdata('warning', 'Cập nhật Danh mục thành công');
                    redirect('admin/scholarship/add_edit/' . $id);
                } else {
                    $this->session->set_flashdata('warning', 'Có lỗi rồi');
                    redirect('admin/scholarship/add_edit');
                }
            } else {
                $last_id = $this->scholarship->add($data);

                if ($last_id != false) {
                    $this->db->query("update scholarship a,university b set a.university_name=b.name  where a.university_id=b.id and a.id= $last_id ");
                    $this->db->query("DELETE FROM `scholarship_brand` WHERE id_scholarship= $last_id ");
                    $this->db->query("DELETE FROM `scholarship_country` WHERE id_scholarship= $last_id ");
                    if (is_array($id_country_str)) {
                        foreach ($id_country_str as $kqid_country_str) {
                            $this->db->query("INSERT INTO `scholarship_country`(`id_scholarship`, `id_country`) VALUES ($last_id,$kqid_country_str)");
                        }
                    }
                    if (is_array($id_brand_str)) {
                        foreach ($id_brand_str as $kqid_brand_str) {
                            $this->db->query("INSERT INTO `scholarship_brand`(`id_scholarship`, `id_brand`) VALUES ($last_id,$kqid_brand_str)");
                        }
                    }
                    $this->db->query("update brand a,scholarship_brand b set b.name_brand=a.name  where a.id=b.id_brand and b.id_scholarship= $last_id ");
                    $this->db->query("update country a,scholarship_country b set b.name_country=a.name  where a.id=b.id_country and b.id_scholarship= $last_id ");
                    
                    $this->session->set_flashdata('warning', 'Thêm mới Danh mục thành công');
                    redirect('admin/scholarship');
                } else {
                    $this->session->set_flashdata('warning', 'Có lỗi rồi');
                    redirect('admin/scholarship/add_edit');
                }
            }
        }

        if ($_id != '')
            $data['article'] = $this->scholarship->get_by_id($_id);
        $sql = "select * from university";
        $data['cat'] = $this->db->query($sql)->result();
        $sql = "SELECT * FROM `brand`";
        $data['brand'] = $this->db->query($sql)->result();
        $sql = "SELECT * FROM `country`";
        $data['country'] = $this->db->query($sql)->result();
        $this->render($this->load->view('admin/scholarship/scholarship_form', $data, TRUE));
    }

    function delete() {

        $this->permission_edit_del();

        $id = $this->uri->segment(4);
        /* if($this->scholarship->parent_exists($id)) {
          $this->session->set_flashdata('message', 'Bạn cần xóa danh mục con trước khi xóa!');
          redirect('admin/scholarship');
          } else {
         */
        if ($this->scholarship->delete($id)) {
            $this->session->set_flashdata('warning', 'Xóa danh mục thành công!');
            redirect('admin/scholarship');
        } else {
            $this->session->set_flashdata('warning', 'Xóa danh mục Thất bại!');
            redirect('admin/scholarship');
        }
        //}
    }

}

/* End file */
/* Local application/controllers/admin/scholarship.php */
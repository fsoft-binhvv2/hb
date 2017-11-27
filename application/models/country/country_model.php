<?php

if (!defined('BASEPATH'))
    exit('Woa...Not Find System Folder');

/* -----------------------------------------------
  # Rao_vat version 1.0
  # Model country
  # Extends CI_Model
  # Author: Nguyen Duc Hung - http://tinagroup.net
  # Create date: 26/04/2011
  ------------------------------------------------ */

class country_model extends CI_Model {

    var $table = 'country';

    function __construct() {

        parent:: __construct();
    }

    function add($data) {

        $this->db->set('name', $data['name']);
        $this->db->set('alias', $data['alias']);
        //$this->db->set('show_home', $data['show_home']);		
        //$this->db->set('parent', $data['parent']);
        $this->db->set('order', $data['order']);
        if ($this->db->insert($this->table))
            return TRUE;
        else
            return FALSE;
    }

    function update($id, $data) {

        $this->db->where('id', $id);
        $this->db->set('name', $data['name']);
        $this->db->set('alias', $data['alias']);
        //$this->db->set('show_home', $data['show_home']);		
        //$this->db->set('parent', $data['parent']);
        $this->db->set('order', $data['order']);
        if ($this->db->update($this->table))
            return TRUE;
        else
            return FALSE;
    }

    function get_by_id($id) {

        $q = $this->db->get_where($this->table, array('id' => $id));

        return $q->row();

        $q->free_result();
    }

    function get_root_country($parent) {

        $q = $this->db->get_where($this->table, array('parent' => $parent));

        return $q;

        $q->free_result();
    }

    function delete($id) {

        $this->db->where('id', $id);

        if ($this->db->delete($this->table))
            return TRUE;
        else
            return FALSE;
    }

    function get_country_where($where = null, $order = null, $limit = null) {

        if ($where != null) {
            foreach ($where as $key => $val) {
                if ($key[0] == '?') {
                    $this->db->where_in(substr($key, 1), $val);
                } elseif ($key[0] == '!') {
                    $this->db->where_not_in(substr($key, 1), $val);
                } else {
                    $this->db->where($key, $val);
                }
            }
        }

        if ($order != null) {
            foreach ($order as $key => $val) {
                $this->db->order_by($key, $val);
            }
        }

        if ($limit != null) {
            $this->db->limit($limit['max'], $limit['begin']);
        }

        $q = $this->db->get($this->table);

        return $q;

        $q->free_result();
    }

    public function totals() {
        return $this->db->count_all_results($this->table);
    }

    function get_all($root) {

        $cat = array();

        $q = $this->db->query("SELECT * FROM country WHERE parent = " . $root);

        foreach ($q->result() as $row) {
            $cat[] = array(
                'id' => $row->id,
                'name' => $this->name,
                'alias' => $row->alias,
                'order' => $row->order
            );

            $cat = array_merge($cat, $this->get_all($row->id));
        }

        return $cat;
    }

    function getPath($id) {

        $query = $this->db->query("SELECT * FROM country WHERE id=" . $id);

        $country = $query->row();
        if ($country->parent) {
            return $this->getPath($country->parent) . '&nbsp;>&nbsp;' . $country->country_name;
        } else {
            return $country->country_name;
        }
    }

    function get_name($id) {

        $this->db->select('cat_name');
        $q = $this->db->get_where($this->table, array('catid' => $id));

        $result = $q->row();

        return $result->cat_name;
    }

    function get_name_alias($id) {

        $this->db->select('alias');
        $q = $this->db->get_where($this->table, array('catid' => $id));

        $result = $q->row();

        return $result->alias;
    }

}

// End file
// Local appllication/models/product/cateegory_model.php

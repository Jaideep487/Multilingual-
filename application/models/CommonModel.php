<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model {

	public function getMainMenu($langcode){
	$lang = 'name_' . $langcode;
	$slug = 'slug_' . $langcode;
	$this->db->select($lang);
	$this->db->select($slug);
	$this->db->where('status', '1');
	$this->db->where('topmenu', '1');
	
	$this->db->order_by('sort_order', 'ASC');
	$this->db->from('menu');
	$result = $this->db->get();
	return $result->result_array();
	} 

	public function getPageContent($langcode, $menuid){
	
	$this->db->where('menu_id', $menuid);
	$this->db->where('lang_code', $langcode);
	$this->db->from('pages');
	$result = $this->db->get();
	return $result->row_array();
	 
	}
	
	public function doAddContact($data){
		return $this->db->insert('messages', $data);
	}
}
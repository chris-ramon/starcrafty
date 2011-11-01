<?php

class Tag_model extends CI_Model{
	function searchByName($name){
		$this->load->model('persistence');
		$r = $this->persistence->searchByCriteria('tags', 'tag', $name);
		return $r;
	}

	function insert($data){
		$this->load->model('persistence');
		$r = $this->persistence->insert('tags', $data);
		return $r;
	}

}
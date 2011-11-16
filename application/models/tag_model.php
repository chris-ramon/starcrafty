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

	function buscar($tag){
		$sql = "SELECT torneos_tags.id_torneo\n"
    . "FROM `tags`\n"
    . "INNER JOIN `torneos_tags`\n"
    . "WHERE tags.id = torneos_tags.id_tag\n"
    . "AND tags.tag = \"$tag\"";
    	
    	$query = $this->db->query($sql);
    	return $query->result();

	}

}
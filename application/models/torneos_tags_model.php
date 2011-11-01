<?php

class Torneos_tags_model extends CI_Model{
	function insert($data){
		$this->load->model('persistence');
		$r = $this->persistence->insert('torneos_tags',$data);
		return $r;
	}

	function getTags($id){
		$query = $this->db->query("SELECT tags.tag\n"
	    ."FROM `torneos`\n"
	    . "INNER JOIN `torneos_tags`\n"
	    . "ON torneos.id = torneos_tags.id_torneo\n"
	    . "\n"
	    . "INNER JOIN `tags`\n"
	    . "ON tags.id = torneos_tags.id_tag\n"
	    . "\n"
	    . "WHERE torneos.id = $id LIMIT 0, 5 ;");

	    return $query->result();
	}
}
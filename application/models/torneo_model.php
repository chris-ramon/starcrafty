<?php

class Torneo_model extends CI_Model{	
	function nuevoTorneo($data){
		$this->load->model('persistence');
		$result = $this->persistence->insert('torneos',$data);
		return $result;
	}

	function principalInfo(){
		$this->db->select('id, nombre, descripcion, imagen, estado');
		$query = $this->db->get('torneos');
		$query = $query->result();
		$this->load->model('torneos_tags_model');
		$data = FALSE;
		foreach($query as $row){
			$row->tags = $this->torneos_tags_model->getTags($row->id);
			$data[] = $row;
		}
		return $data;
	}

	function buscarPorId($id){
		$this->db->where('id', $id);
		$query = $this->db->get('torneos');
		$result = $query->result();
		return $result[0];
	}

}

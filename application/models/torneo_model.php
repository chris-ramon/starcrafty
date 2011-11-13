<?php

class Torneo_model extends CI_Model{

	function getTorneosPorCriterio($criterio, $valor){
		$this->db->where($criterio, $valor);
		$this->db->where('aprobado', 'si');
		$query = $this->db->get('torneos');
		$query = $query->result();
		$this->load->model('torneos_tags_model');		
		$this->load->model('comentario_model');		
		$data = FALSE;
		foreach($query as $row){
			$row->tags = $this->torneos_tags_model->getTags($row->id);
			$row->cantidad_comentarios = $this->comentario_model->cantidadComentarios($row->id);
			$data[] = $row;
		}
		return $data;
	}
	
	function nuevoTorneo($data){
		$this->load->model('persistence');
		$result = $this->persistence->insert('torneos',$data);
		return $result;
	}

	function principalInfo(){
		$this->db->select('id, id_user, nombre, descripcion, imagen, estado, aprobado, fecha_torneo, tipo');
		$query = $this->db->get('torneos');
		$query = $query->result();
		$this->load->model('torneos_tags_model');		
		$this->load->model('comentario_model');		
		$this->load->model('user_model');		
		$data = FALSE;
		foreach($query as $row){
			$row->tags = $this->torneos_tags_model->getTags($row->id);
			$row->cantidad_comentarios = $this->comentario_model->cantidadComentarios($row->id);
			$row->creador = $this->user_model->obtenerUserPorId($row->id_user)->username;
			$data[] = $row;
		}
		return $data;
	}

	function buscarPorId($id){
		$this->load->model('user_model');
		$this->load->model('comentario_model');
		$this->db->where('id', $id);
		$query = $this->db->get('torneos');		
		$result = $query->result();	
		if($result){
			$user = $this->user_model->obtenerUserPorId($result[0]->id_user);
			$comentarios = $this->comentario_model->obtenerComentariosPorIdTorneo($id);
			$result[0]->comentarios = $comentarios;
			$result[0]->user = $user->username;
			return $result[0];
		}
		return FALSE;
	}

	function torneosAprobados(){
		$query = $this->db->query("select count('aprobado') as aprobados
		from `torneos`
		where aprobado = 'si';");
		$results = $query->result();
		$result = $results[0];
		if($result->aprobados == 0){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function torneosPorAprobar(){
		$this->load->model('user_model');
		$this->db->where('aprobado', 'no');
		$query = $this->db->get('torneos');
		$results = $query->result();
		$data = FALSE;
		foreach($results as $row){
			$row->creador = $this->user_model->obtenerUserPorId($row->id_user)->username;
			$data[] = $row;
		}
		return $data;
	}

	function updateTorneo($data, $id){
		$this->load->model('persistence');
		$this->persistence->update('torneos', $data, $id);
	}

	function delete($id){
		$this->load->model('persistence');
		$this->persistence->delete('torneos',$id);	
	}

}

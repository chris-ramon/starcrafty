<?php

class Comentario_model extends CI_Model{
	
	function obtenerComentariosPorIdTorneo($id){
		$this->db->where('id_torneo', $id);
		$query = $this->db->get('comentarios');
		if($query){
			$result = $query->result();
			return $result;
		}
		return FALSE;
	}

	function agregarNuevo($data){
		$this->load->model('persistence');
		$result = $this->persistence->insert('comentarios', $data);
		return $result;
	}

	function cantidadComentarios($id_torneo){
		$query = "select count('comentario') as cantidad_comentarios
		from comentarios
		where id_torneo = ".$id_torneo.";";
		$results = $this->db->query($query)->result();
		$result = $results[0];
		return $result->cantidad_comentarios;
	}

}
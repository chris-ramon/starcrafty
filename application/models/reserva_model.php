<?php 
class Reserva_model extends CI_Model{
	function ingresar($data){
		$this->load->model('persistence');
		$result = $this->persistence->insert('reservas', $data);
		return $result;
	}

	function total_reservas($id_torneo){
		$query = $this->db->query("select count(id_torneo) as total_reservas
				from `reservas`
				where id_torneo =".$id_torneo.";");
		$results = $query->result();
		return $results[0];
	}

	function getAll_byTorneoId($id_torneo){
		$this->load->model('persistence');
		$this->load->model('user_model');
		$this->load->model('torneo_model');
		$results = $this->persistence->searchByCriteria('reservas', 'id_torneo', $id_torneo);
		if($results){
			foreach($results as $reserva){
				$reserva->username = $this->user_model->obtenerUserPorId($reserva->id_user)->username;
				$reserva->nombre_torneo = $this->torneo_model->getName_byId($reserva->id_torneo)->nombre;
			}
		}
		return $results;
	}

	function getAll_byUserId($id_user){
		$this->load->model('persistence');
		$this->load->model('torneo_model');
		$results = $this->persistence->searchByCriteria('reservas', 'id_user', $id_user);
		if($results){
			foreach($results as $reserva){				
				$reserva->nombre_torneo = $this->torneo_model->getName_byId($reserva->id_torneo)->nombre;
			}
		}
		return $results;

	}
}
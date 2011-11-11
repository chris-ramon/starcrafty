<?php

class Auspiciador_model extends CI_Model{
	function getAll(){
		$this->load->model('persistence');
		$query = $this->persistence->getAll('auspiciadores');			
		return $query;
	}
}
<?php

class Auspiciador extends CI_Controller{
	function listar(){
		$key = $this->input->post('key');
		$this->load->model('auspiciador_model');
		$auspiciadores = $this->auspiciador_model->getAll();
		$data = array();
		foreach($auspiciadores as $auspiciador){
			$data[] = $auspiciador->auspiciador;
		}
		$data = implode(' ', $data);
		echo $data;
		// $data = array('chris','ramon');
		// $data = array(
		// 	'key' => "chris",
		// 	1 => "ramon"
		// );		
		// echo json_encode($data);
		// $data = implode(' ',$data);		
	}
}
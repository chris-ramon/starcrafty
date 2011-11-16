<?php
class Busqueda extends CI_Controller{
	function index(){
		$this->load->model('tag_model');
		$this->load->model('torneo_model');
		$criterio = $this->input->post('busqueda');
		$resultados = $this->tag_model->buscar($criterio);
		$torneos = array();
		foreach($resultados as $torneo){
			$torneo = $this->torneo_model->buscarPorId($torneo->id_torneo);
			$torneos[] = $torneo;
		}
		$data['main_content'] = 'busqueda';
		$data['resultados'] = $resultados;
		$data['torneos'] = $torneos;
		$this->load->view('includes/template', $data);
	}
}
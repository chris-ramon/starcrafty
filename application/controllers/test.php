<?php 
class Test extends CI_Controller{
	function index(){
		$this->load->model('torneo_model');
		echo var_dump($this->torneo_model->torneosPorAprobar());
	}

}
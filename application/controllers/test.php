<?php

class Test extends CI_Controller{
	function index(){
		$this->load->model('member_model');
		$query = $this->member_model->obtenerTorneosCreados(1);
		echo var_dump($query);
		
	}
}
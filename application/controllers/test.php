<?php

class Test extends CI_Controller{
	function index(){
		$this->load->model('torneo_model');
		$r = $this->torneo_model->principalInfo();
		echo $r[0]->nombre;
		echo $r[1]->nombre;
		
	}
}
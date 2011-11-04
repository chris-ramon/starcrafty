<?php

class Test extends CI_Controller{
	function index(){
		$this->load->model('user_model');
		$query = $this->member_model->validate();
		echo var_dump($query);
		
	}
}
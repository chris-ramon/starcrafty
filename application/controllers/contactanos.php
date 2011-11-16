<?php

class Contactanos extends CI_Controller
{
    function index()
    {
        	$data['main_content'] = "contactanos";
            $data['second_js'] = "crearTorneo";
            $data['third_js'] = "inhome";
            $data['second_css'] = "crearTorneo";
            $data['error'] = "";
            $this->load->view('includes/template', $data);
        
    }

    function enviarmensaje(){
    	echo 'mensaje enviado';
  //   	$this->load->library('email');

		// $this->email->from('lalala@gmail.com', 'Your Name');
		// $this->email->to('rchristian@gmail.com'); 

		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');	

		// $this->email->send();

		// echo $this->email->print_debugger();
    }
}

?>

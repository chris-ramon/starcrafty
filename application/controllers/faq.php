<?php

class Faq extends CI_Controller{
    
    public function index()
    {
        
         	$data['main_content'] = "faq";
            $data['second_js'] = "crearTorneo";
            $data['third_js'] = "inhome";
            $data['second_css'] = "crearTorneo";
            $data['error'] = "";
            $this->load->view('includes/template', $data);
    }
}

?>

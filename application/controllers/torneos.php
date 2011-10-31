<?php
require_once 'upload.php';

class Torneos extends CI_Controller{
    function index(){
        $data['main_content'] = "starcrafty";
        $this->load->view('includes/template', $data);
    }
    
    function reservas(){
        $data['main_content'] = "reservas";
        $this->load->view('includes/template', $data);
    }
    
    function activos(){
        $data['main_content'] = "activos";
        $this->load->view('includes/template', $data);
    }
    
    function suspendidos(){
        $data['main_content'] = "suspendidos";
        $this->load->view('includes/template', $data);    
    }
    
    function concluidos(){
        $data['main_content'] = "concluidos";
        $this->load->view('includes/template', $data);
    }
    function crear(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $data['main_content'] = "crear";
            $data['second_js'] = "crearTorneo";
            $data['second_css'] = "crearTorneo";
            $data['error'] = "";
            $this->load->view('includes/template', $data);
        }
        else{
            echo 'Necesitas <a href="../">logearte</a> antes de usar esta pagina, gracias.';
        }
    }
    
    function nuevo(){
        $upload = new Upload();
        $error = $upload->do_upload('imagen');        
        $this->index();
        
    }
    
}

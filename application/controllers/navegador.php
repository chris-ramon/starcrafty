<?php


class Navegador extends CI_Controller {
    
    public function quienEsStarcrafty()
    {
        
            $data['main_content'] = "quienesstarcrafty";
            $data['second_js'] = "crearTorneo";
            $data['third_js'] = "inhome";
            $data['second_css'] = "crearTorneo";
            $data['error'] = "";
            $this->load->view('includes/template', $data);
    }
    
    
}

?>

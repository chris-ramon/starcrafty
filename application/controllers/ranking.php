<?php


class Ranking extends CI_Controller 
{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        
        $this->load->model('user_model');
        
        $data['main_content'] = "ranking";
        //$data['torneos'] = $this->torneo_model->principalInfo();
       
        $data['miembros']=$this->user_model->getRankingOrdenados();
        
        $this->load->view('includes/template', $data);
        
    
        
    }
    
    public function verMasDelJugador()
    {
        $id_captured = (int) $this->uri->segment("3");
        $this->load->model('user_model');
        $data['main_content'] = "verMasDelJugador";
        $data['jugador']=$this->user_model->obtenerUserPorId($id_captured);
        
        
        //$fechaNacimiento=mkt(0,0,0,$dia,$mes,$anho);
        
        $fechaNaci=new DateTime($data['jugador']->fechaNacimiento);
        $today=new DateTime();
        //$data['edad']=$fechaNaci-$today;
        $intervalo=$fechaNaci->diff($today);
        $data['edad']=$intervalo->format('%y');
        $this->load->view('includes/template', $data);

        
    }
    
    
    
}

?>

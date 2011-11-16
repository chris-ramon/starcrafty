<?php


class Matches extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    public function crearMatch($matchId,$torneoId,$rondaId,$jugador1,$jugador2,$ganador)
    {
            $this->load->model('match_model');
        
            $data['matchId']=$matchId;
            $data['torneoId']=$torneoId;
            $data['rondaId']=$rondaId;
            $data['jugador1']=$jugador1;
            $data['jugador2']=$jugador2;
            $data['ganador']=$ganador;
            
            
            $this->match_model->crearMatch($data);
            
            
         
    }
    
    
    
    
    
}

?>

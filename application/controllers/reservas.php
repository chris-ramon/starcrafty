<?php

//omar
class Reservas extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getReservasParaTorneo($torneoId)
    {
        $this->load->model('reserva_model');
        return $this->reserva_model->getReservasDelTorneo($torneoId);
        
    }
    
    
    
    public function crearReserva()
    {
        $hayCupo=true;
        //al momento de crear una reserva este codigo se llama y se crea una reserva para un torneo dando 0 puntos y estado vivo al jugador
        $this->load->model('reserva_model');
        $this->load->model('torneo_model');
        
        $torneoId = $this->input->post('torneoId', TRUE);
        $jugadorId = $this->input->post('jugadorId', TRUE);
        
        
        $jugadoresDelTorneo=$this->torneo_model->getNumeroParticipantesTorneoPorId($torneoId);
        
        
        $numeroReservasExistentes= $this->reserva_model->getNumeroReservasParaTorneoByID($torneoId);
        
        if($numeroReservasExistentes==$jugadoresDelTorneo)
        {
            $hayCupo=false;
        }
        $estaInscrito=$this->reserva_model->estaInscritoJugadorConId($torneoId,$jugadorId);
        
        if($hayCupo  && !$estaInscrito)
        {
            $data['id_torneo']=$torneoId;
            $data['id_user']=$jugadorId;
            $data['fecha']=date('Y-m-d H:i:s');
            $data['codigo_pago']=0;
        
            $r = $this->reserva_model->crearReserva($data);    
        }
        else
        {
            if($estaInscrito)
            {
                echo 'Ya esta Ud. inscrito en el torneo';
            }
            else
            {
                echo 'No hay más lugar para más reservas para este torneo';
            }
        } 
    }
    
}

?>

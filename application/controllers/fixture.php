<?php

class Fixture extends CI_Controller
{
    
   
    
    
    public function index($_torneoId)
    {
        $torneoId=$_torneoId;
       
        $this->load->model('reserva_model');
        //se obtienen las reservas existentes que deben estar completas
        $reservas=$this->reserva_model->getReservasDelTorneo($torneoId);
        
        $this->load->model('torneo_model');
        //se obtinene el torneo 
        $torneo=$this->torneo_model->getTorneoPorId($torneoId);
        
        //numero de jugadores
        $numeroJugadores=$this->torneo_model->getNumeroParticipantesTorneoPorId($torneoId);
        
        
        $this->load->model('match_model');
        //solo sirve si hay matches existentes
        $matches=$this->match_model->getMatchesByTorneoId($torneoId);
        //print_r($matches);
        
        
        $this->load->model('user_model');
        $players=$this->user_model->getTodosMiembros();
        foreach($players as $player)
        {
            $joueurs[$player->id]=$player;
            
        }
        $data['jugadores']=$joueurs;
        
        $arregloOrdenadoMatchesPorTorneo=$this->torneo_model->getArregloDeMatchesPorTorneo($torneoId);
        //print_r($arregloOrdenadoMatchesPorTorneo);
        
        $data['matchesOrdenados']=$arregloOrdenadoMatchesPorTorneo;
        $data['reservas']=$reservas;
        $data['numeroJugadores']=$numeroJugadores;
        $data['numeroRondas']=log($numeroJugadores,2);
        $data['torneoId']=$torneoId;
        $data['numeroMatchesTeoricos']=$this->torneo_model->getArregloNumeroMatchesTeoricoByRonda($torneoId);
        
        $data['torneoNombre']=$torneo->nombre;
        $data['estado']=$torneo->estado;
        
        $numeroRondas=log($numeroJugadores,2);
        
        $numerosMatchesPorRonda=array();
        for($f=1;$f<=$numeroRondas;$f++)
        {
            $numerosMatchesPorRonda[$f]=$this->match_model->getNumeroDeMatchesPorRondaDeTorneo($f,$_torneoId);
            $data['numeroMatchesPorRonda'][$f]=$this->match_model->getNumeroDeMatchesPorRondaDeTorneo($f,$_torneoId);
        }
        
        foreach($data['numeroMatchesPorRonda'] as $key=>$value)
        {
            if($value==0)
            {
                    $ultimaRondaModificada=$key-1;
                    break;
                    
            }
            else
            {
                $ultimaRondaModificada=$numeroRondas;
                
            }
            
            
        }
        
        $data['ultimaRondaModificada']=$ultimaRondaModificada;
        $data['rondaId']=$ultimaRondaModificada+1;
        
        //print_r( $numerosMatchesPorRonda);
        
        $data['main_content'] = 'fixture';
        
        $this->load->view('includes/template', $data);
        
        
    }
    
    public function verFixtureTorneo($_torneoId)
    {
        $torneoId=$_torneoId;
       
        $this->load->model('reserva_model');
        //se obtienen las reservas existentes que deben estar completas
        $reservas=$this->reserva_model->getReservasDelTorneo($torneoId);
        
        $this->load->model('torneo_model');
        //se obtinene el torneo 
        $torneo=$this->torneo_model->getTorneoPorId($torneoId);
        
        //numero de jugadores
        $numeroJugadores=$this->torneo_model->getNumeroParticipantesTorneoPorId($torneoId);
        
        
        $this->load->model('match_model');
        //solo sirve si hay matches existentes
        $matches=$this->match_model->getMatchesByTorneoId($torneoId);
        //print_r($matches);
        
        
        $this->load->model('user_model');
        $players=$this->user_model->getTodosMiembros();
        foreach($players as $player)
        {
            $joueurs[$player->id]=$player;
            
        }
        $data['jugadores']=$joueurs;
        
        $arregloOrdenadoMatchesPorTorneo=$this->torneo_model->getArregloDeMatchesPorTorneo($torneoId);
        //print_r($arregloOrdenadoMatchesPorTorneo);
        
        $data['matchesOrdenados']=$arregloOrdenadoMatchesPorTorneo;
        $data['reservas']=$reservas;
        $data['numeroJugadores']=$numeroJugadores;
        $data['numeroRondas']=log($numeroJugadores,2);
        $data['torneoId']=$torneoId;
        $data['numeroMatchesTeoricos']=$this->torneo_model->getArregloNumeroMatchesTeoricoByRonda($torneoId);
        
        $data['torneoNombre']=$torneo->nombre;
        $data['estado']=$torneo->estado;
        
        $numeroRondas=log($numeroJugadores,2);
        
        $numerosMatchesPorRonda=array();
        for($f=1;$f<=$numeroRondas;$f++)
        {
            $numerosMatchesPorRonda[$f]=$this->match_model->getNumeroDeMatchesPorRondaDeTorneo($f,$_torneoId);
            $data['numeroMatchesPorRonda'][$f]=$this->match_model->getNumeroDeMatchesPorRondaDeTorneo($f,$_torneoId);
        }
        
        foreach($data['numeroMatchesPorRonda'] as $key=>$value)
        {
            if($value==0)
            {
                    $ultimaRondaModificada=$key-1;
                    break;
                    
            }
            else
            {
                $ultimaRondaModificada=$numeroRondas;
                
            }
            
            
        }
        
        $data['ultimaRondaModificada']=$ultimaRondaModificada;
        $data['rondaId']=$ultimaRondaModificada+1;
        
        //print_r( $numerosMatchesPorRonda);
        
        $data['main_content'] = 'descripcionTorneosFixture';
        
        $this->load->view('includes/template', $data);
        
    }
    
    
    
    
    public function updateFixture($_torneoId,$_rondaId)
    {
        $torneoId=$_torneoId;
        $rondaId=$_rondaId;
        
        
        $this->load->model('torneo_model');
        
        $torneo=$this->torneo_model->getTorneoPorId($torneoId);
        $numeroMatchesTeoricos=$this->torneo_model->getArregloNumeroMatchesTeoricoByRonda($torneoId);
        
        $numeroInputsDesdeFormulario=$numeroMatchesTeoricos[$rondaId];
        
        $ganadores=array();
        for($i=1;$i<=$numeroInputsDesdeFormulario;$i++)
        {
            $ganadores[$i]=$_POST[$i];
            //echo $ganadores[$i];
        }
        if($rondaId==1)//primer update
        {
            //identificar los participantes que juegan en cada match de las reservas
            $this->load->model('reserva_model');
        //se obtienen las reservas existentes que deben estar completas
            $reservas=$this->reserva_model->getReservasDelTorneo($torneoId);
            $index=1;
            foreach($reservas as $participacion)
            {
                $jugadores[$index++]=$participacion->jugadorId;//se tiene los participantes
                
            }
        }
        else  // no primer update
        {
            //identificar los participantes de los matches previamente ingresados
            $this->load->model('match_model');
            $arregloOrdenadoMatchesPorTorneo=$this->torneo_model->getArregloDeMatchesPorTorneo($torneoId);
            $matchesAnteriores=$arregloOrdenadoMatchesPorTorneo[$rondaId-1];
            
            $index=1;
            foreach($matchesAnteriores as $participacion)
            {
                $jugadores[$index++]=$participacion->ganador;//se tiene los participantes
                
            }

        }
        for($j=1;$j<=$numeroInputsDesdeFormulario;$j++)
        {
            //realizar un registro de match
            $this->load->model('match_model');
            
            $data['matchId']=$j;
            $data['torneoId']=$torneoId;
            $data['rondaId']=$rondaId;
            $data['jugador1']=$jugadores[$j*2-1];
            $data['jugador2']=$jugadores[$j*2];
            $data['ganador']=$ganadores[$j];
            
            
            $this->match_model->crearMatch($data);
           
            
        }
        
            // $data['main_content'] = 'fixture';
        
               // $this->load->view('includes/template', $data);
                $this->index($torneoId);
    }
    public function descargarFixture($_torneoId)
    {
        $torneoId=$_torneoId;
        $this->load->model('torneo_model');
        
        $torneo=$this->torneo_model->getTorneoPorId($torneoId);
        
        //$arregloOrdenadoMatchesPorTorneo=$this->torneo_model->getArregloDeMatchesPorTorneo($torneoId);
        $this->load->model('match_model');
        //solo sirve si hay matches existentes
        $matches=$this->match_model->getMatchesByTorneoId($torneoId);
        $this->load->model('user_model');
        $players=$this->user_model->getTodosMiembros();
        foreach($players as $player)
        {
            $joueurs[$player->id]=$player;
            
        }
        
        
        $data="";
       print_r( $matches);
        foreach($matches as $match)
        {
            
            $data=$data." Match: ".$match->matchId." Ronda: ".$match->rondaId." Jugador1 : ".$joueurs[$match->jugador1]. " Jugador2: ".$joueurs[$match->jugador2]->username." Ganador: ".$joueurs[$match->ganador]->username;
        }
        $this->load->library('Zip');
            $name = "FixtureTorneo$torneoId.txt";
            

            $this->zip->add_data($name, $data); 
            
            $this->zip->download("$name.zip");
    }
    
    
}

?>

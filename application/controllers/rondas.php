<?php
//omar
class Rondas extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function crearRondas()
    {
        $this->load->model('ronda_model');
        
        $torneoId=$_POST['torneoId'];
        
        $index=1;
        while(isset($_POST['lugar'.$index]))
        {
          
            $data['torneoId']=$torneoId;
            $data['rondaId']=$index;
            $data['lugar']=$_POST['lugar'.$index];
            $data['fecha']=$_POST['fecha'.$index];
            
            //probando con valores de prueba
            $hoy=date('Y-m-d H:i:s');
            $data['fecha']=$hoy;//->format('YYYY-mm-dd');
            
            
            $this->ronda_model->crearRonda($data);
            $index++;
            
            
        }
        //echo "elloo";
        
    }
    
    public function mostrarFormularioRondas($id)
    {
        $torneoId=$id;//$_GET['torneoId'];
        
        $this->load->model('torneo_model');
        $torneo=$this->torneo_model->getTorneoPorId($torneoId);
        $data['numeroRondas']=log($torneo->numeroParticipantes,2);
        $data['torneoId']=$id;
        $data['main_content'] = "formulariorondas";
            $data['second_js'] = "crearTorneo";
            $data['third_js'] = "inhome";
            $data['second_css'] = "crearTorneo";
            $data['error'] = "";
            $this->load->view('includes/template', $data);
        
        
    }
    
    
}

?>

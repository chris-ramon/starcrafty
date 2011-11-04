<?php
require_once 'upload.php';

class Torneos extends CI_Controller{
    function index(){
        $this->load->model('torneo_model');
        $this->load->model('torneos_tags_model');
        $data['main_content'] = "starcrafty";
        $torneos = $this->torneo_model->principalInfo();
        $data['torneos'] = $torneos;
        if($torneos){
            $data['torneos'] = array_reverse($torneos);    
        }        
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

    function detalle($id){        
        $this->load->model('torneo_model');
        $data['main_content'] = "detalle";
        $data['torneo'] = $this->torneo_model->buscarPorId($id);
        $this->load->view('includes/template', $data);        
    }

    function actualizar($id){
        echo 'from actualizar '.$id;
    }

    function crearpub(){
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
        $result = $this->do_upload('imagen');
        $fileName = $result['file_name'];
        $image = "http://localhost/starcrafty/uploads/".$fileName;       
        
        $nombre = $this->input->post('nombre', TRUE);
        $descripcion = $this->input->post('descripcion', TRUE);        
        
       

        $data['nombre'] = $nombre;
        $data['descripcion'] = $descripcion;
        $data['imagen'] = $image;
        $data['estado'] = "Reserva Abierta";
        $data['id_user'] = $this->session->userdata('id');

        $this->load->model('torneo_model');        
        
        $r = $this->torneo_model->nuevoTorneo($data);
        
        $this->_agregarTags();

        redirect('/');
        
    }
    
    // lógica para agregar el torneo

    // función para subir la imagen a la carpeta uploads que
    // está al mismo nivel que el path raíz

        function do_upload($field_name){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '900';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            
            $this->load->library('upload', $config);              
            
            if ( ! $this->upload->do_upload($field_name))
            {
                $error = array('error' => $this->upload->display_errors());
                return $error['error'];
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                return $this->upload->data();
            }
        }

        function _agregarTags(){    
            $id_torneo = mysql_insert_id();
            $data['id_torneo'] = $id_torneo;
            $this->load->model('tag_model');
            $this->load->model('torneos_tags_model');
            $tags = $this->input->post('tags', TRUE);
            $tagsArray = explode(" ", $tags);
            $i = 0;
            foreach($tagsArray as $tag){                
               $r = $this->tag_model->searchByName($tag);
               if($r){                                        
                    $data['id_tag'] = $r[0]->id;
                    $this->torneos_tags_model->insert($data);

               }
               else {
                   $data_tag['tag'] = $tag;
                   $this->tag_model->insert($data_tag);
                   $data['id_tag'] = mysql_insert_id();
                   $this->torneos_tags_model->insert($data);
               }
            
            }
        }

    
    // termina la lógica para agregar el torneo 
}

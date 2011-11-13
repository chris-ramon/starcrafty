<?php
class Torneos extends CI_Controller{
    function index(){
        $this->load->model('torneo_model');
        $this->load->model('torneos_tags_model');
        $this->load->model('user_model');
        $data['main_content'] = "starcrafty";
        $torneos = $this->torneo_model->principalInfo();
        $aprobados = $this->torneo_model->torneosAprobados();
        $data['torneos'] = $torneos;
        $data['aprobados'] = $aprobados;
        if($torneos){
            $data['torneos'] = array_reverse($torneos);    
        }
        // si el usuario esta logeado actualizamos
        // los torneos creados de la sesión cuando
        // vuelva a la pág principal
        // esto para actualizar los
        // torneos creados por el mismo
        // en la barra lateral izq
        if($this->session->userdata('is_logged')){
            $user_id = $this->session->userdata('id');
            $torneos_creados = $this->user_model->obtenerTorneosCreados($user_id);
            $this->session->set_userdata('torneos_creados', $torneos_creados);
        }
        $this->load->view('includes/template', $data);
    }
    
    function reservas(){
        $this->load->model('torneo_model');        
        $data['main_content'] = "reservas";
        $data['torneos'] = $this->torneo_model->getTorneosPorCriterio('estado','Reserva Abierta');
        $this->load->view('includes/template', $data);
    }
    
    function activos(){
        $this->load->model('torneo_model');        
        $data['main_content'] = "activos";
        $data['torneos'] = $this->torneo_model->getTorneosPorCriterio('estado','En Competencia');
        $this->load->view('includes/template', $data);
    }
    
    function suspendidos(){
        $this->load->model('torneo_model');        
        $data['main_content'] = "suspendidos";
        $data['torneos'] = $this->torneo_model->getTorneosPorCriterio('estado','Suspendido');
        $this->load->view('includes/template', $data);
    }
    
    function concluidos(){
        $this->load->model('torneo_model');        
        $data['main_content'] = "concluidos";
        $data['torneos'] = $this->torneo_model->getTorneosPorCriterio('estado','Concluido');
        $this->load->view('includes/template', $data);
    }

    function detalle($id){        
        $this->load->model('torneo_model');
        $data['main_content'] = "detalle";
        $data['torneo'] = $this->torneo_model->buscarPorId($id);
        $this->load->view('includes/template', $data);        
    }

    function actualizar($id){
        $this->load->model('torneo_model');
        if($estado = $this->input->post('estado')){
            $data = array(
                'estado' => $estado
            );
            $this->torneo_model->updateTorneo($data, $id);
            redirect('/torneos/actualizar/'.$id);

        } else {
            $result = $this->torneo_model->buscarPorId($id);
            $data['main_content'] = 'actualizar';
            $data['torneo'] = $result;
            $this->load->view('includes/template', $data);
        }
    }

    function administrar(){
        $this->load->model('torneo_model');
        $data['main_content'] = "administrar";
        $data['torneos'] = $this->torneo_model->principalInfo();
        $this->load->view('includes/template', $data);
    }

    // para crear torneos públicos
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
            echo 'Necesitas <a href="/starcrafty/">logearte</a> antes de usar esta pagina, gracias.';
        }
    }

    // para crear torneos privados
    function crearpriv(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $data['main_content'] = "crearprivado";
            $data['second_js'] = "crearTorneo";
            $data['third_js'] = "inhome";
            $data['second_css'] = "crearTorneo";
            $data['error'] = "";
            $this->load->view('includes/template', $data);
        }
        else{
            echo 'Necesitas <a href="/starcrafty/">logearte</a> antes de usar esta pagina, gracias.';
        }
    }

    
    function nuevo($tipo){   
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
        $data['aprobado'] = 'no';
        $data['tipo'] = $tipo;

        $this->load->model('torneo_model');        
        
        $r = $this->torneo_model->nuevoTorneo($data);
        
        $this->_agregarTags();

        redirect('/');
        
    }

    function eliminar($id){
        $this->load->model('torneo_model');
        $this->torneo_model->delete($id);
        $this->administrar();
    }

    function poraprobar(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
        $this->load->model('torneo_model');
        $data['main_content'] = 'torneosporaprobar';
        $data['torneos_por_aprobar'] = $this->torneo_model->torneosPorAprobar();
        $this->load->view('includes/template', $data);
        } else {
            echo 'Necesitas <a href="/starcrafty/">logearte</a> antes de usar esta pagina, gracias.';
        }
    }
    
    function confirmartorneos($id, $opcion){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $this->load->model('torneo_model');
            $data = array(
                'aprobado' => $opcion
            );
            $this->torneo_model->updateTorneo($data, $id);
            redirect('/');

        } else {
            echo 'Necesitas <a href="/starcrafty/">logearte</a> antes de usar esta pagina, gracias.';
        }
    }

    // lógica para agregar el torneo

    // función para subir la imagen a la carpeta uploads que
    // está al mismo nivel que el path raíz

        function do_upload($field_name){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '900';
            $config['max_width']  = '500';
            $config['max_height']  = '300';
            
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

    // Comentarios

        function nuevo_comentario($id){
            $this->form_validation->set_rules('comentario', 'Comentario','trim|required');
            $this->form_validation->set_rules('nombre', 'Nombre','trim|required');
            $this->form_validation->set_rules('correo', 'Correo','trim|required|valid_email');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            
            if($this->form_validation->run() == FALSE){
                $this->detalle($id);
                
            } else{
                $this->load->model('comentario_model');
                $data['comentario'] = $this->input->post('comentario');
                $data['nombre'] = $this->input->post('nombre');
                $data['correo'] = $this->input->post('correo');
                // 2011-11-05 - 17:01:23
                $data['fecha'] = date('Y-m-d h:i:s');
                $data['id_torneo'] = (int)$id;            
                $this->comentario_model->agregarNuevo($data);
                redirect('/torneos/detalle/'.$id);
            }
        }    
}

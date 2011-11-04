<?php

class User extends CI_Controller{
    function login(){
        $username = $this->input->post('username');
        $pwd = $this->input->post('pwd');        
        if(empty($username) OR empty($pwd)){
            redirect('/');
        } 
        else{
            $this->load->model('user_model');
            $q = $this->user_model->validate();
            if($q){               
                $data = array(
                    'username' =>  $this->input->post('username'),                    
                    'id' => $q->id,
                    'is_logged' => true,
                    'torneos_creados' => $this->user_model->obtenerTorneosCreados($q->id),
                    'rol' => $q->rol
                );
                $this->session->set_userdata($data);
                redirect('/');
            }
            else{
                redirect('/');
            }
        }  
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    
    function register($rol){
        $this->load->library('form_validation');
        //field name, error message, validation rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|required');
        $this->form_validation->set_rules('id_battlenet', 'ID_Battlenet', 'trim|required');        
       
        if($this->form_validation->run() == FALSE ){  
            $data['main_content'] = 'starcrafty';
            $this->load->view('includes/template', $data);
        }
        else{
            $this->load->model('user_model');
            $query = $this->user_model->create_user($rol);
            if($query){
                $this->login();
            }
            else{
                show_404();
            }
        }
    }   
}

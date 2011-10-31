<?php

class Member extends CI_Controller{
    function login(){
        $username = $this->input->post('username');
        $pwd = $this->input->post('pwd');        
        if(empty($username) OR empty($pwd)){
            redirect('/');
        } 
        else{
            $this->load->model('member_model');
            $query = $this->member_model->validate();
            if($query){               
                $data = array(
                    'username' =>  $this->input->post('username'),
                    'is_logged' => true
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
    
    function register(){
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
            $this->load->model('member_model');
            $query = $this->member_model->create_member();
            if($query){
                $this->login();
            }
            else{
                echo 'false';
            }
        }
    }   
}

<?php

class Member_model extends CI_Model{
    function validate(){
        $this->db->select('id');        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('pwd')));
        $query = $this->db->get('miembros');
        if($query->num_rows == 1){
            $r = $query->result();
            return $r[0]->id;
        }
        else{ return 0; }
    }
    
    function create_member(){
        $pwd = md5($this->input->post('pwd'));
        $new_member_insert_data = array(
            'username' => $this->input->post('username'),
            'password' => $pwd,
            'id_battlenet' => $this->input->post('id_battlenet')
        );
        $insert = $this->db->insert('miembros', $new_member_insert_data);
        return $insert;
    }

    
}

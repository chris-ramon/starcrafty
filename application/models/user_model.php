<?php

class User_model extends CI_Model{
    const PUNTOS=1;

    function validate(){
        $this->db->select('id, rol');        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('pwd')));
        $query = $this->db->get('users');
        if($query->num_rows == 1){
            $r = $query->result();
            return $r[0];
        }
        else{ return 0; }
    }
    
    function create_user($rol){
        $pwd = md5($this->input->post('pwd'));
        $new_user_insert_data = array(
            'username' => $this->input->post('username'),
            'password' => $pwd,
            'id_battlenet' => $this->input->post('id_battlenet'),
            'rol' => $rol
        );
        $insert = $this->db->insert('users', $new_user_insert_data);
        return $insert;
    }

    function obtenerTorneosCreados($id){
        $sql = "SELECT torneos.id, torneos.nombre\n"
    . "FROM `torneos`\n"
    . "INNER JOIN `users`\n"
    . "ON torneos.id_user = users.id\n"
    . "WHERE users.id = $id LIMIT 0, 30 ";
        $query = $this->db->query($sql);
        if($query){
            $result = $query->result();
            return $result;
        }
        return FALSE;
    }

    function obtenerUserPorId($id_user){
        $this->db->where('id', $id_user);
        $query = $this->db->get('users');        
        if($query){
            $result = $query->result();
            return $result[0];
        }
        return FALSE;

    }

    function getRankingOrdenados()
    {
        
        $this->db->order_by("ranking", "asc");         
        $query = $this->db->get('users'); 
        return $query->result();
        
    }

    
}

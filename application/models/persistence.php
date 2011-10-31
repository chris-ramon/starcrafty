<?php

class Persistence extends CI_Model{

    function insert($table, $data){
        return $this->db->insert($table, $data);
    }
    
    function getAll($table, $option=""){
        $q = $this->db->get($table, $option);
        
        if($q->num_rows() > 0){
            foreach($q->result() as $row){
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }
    
    function update($table, $data, $id){
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }
    
    function delete($table, $id){
        return $this->db->delete($table, array('id' => $id));
    }   
    
    
}

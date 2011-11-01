<?php

class Persistence extends CI_Model{

    function insert($table, $data){
        return $this->db->insert($table, $data);
    }
    
    function getAll($table, $option=""){
        $q = $this->db->get($table, $option);
        $data = FALSE;
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
    
    function searchByCriteria($table, $criteria, $value){
        $this->db->where($criteria, $value);
        $r = $this->db->get($table);
        $data = FALSE;
        if($r->num_rows > 0){
            foreach($r->result() as $row){
                $data[] = $row;
            }        
        }
        $r->free_result();
        return $data;
    }
    
    
}

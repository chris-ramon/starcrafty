<?php

class Upload extends CI_Controller{
    function do_upload($field_name){
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
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

}

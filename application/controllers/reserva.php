<?php
class Reserva extends CI_Controller{
	function nueva($id_torneo){
		$id_user = $this->session->userdata('id');
		$codigo_pago = $this->input->post('codigoPago', TRUE);
		$fecha = date('Y-m-d h:i:s');
		$this->load->model('reserva_model');
		$data = array(
			'id_user' => $id_user,
			'id_torneo' => $id_torneo,
			'fecha' => $fecha,
			'codigo_pago' => $codigo_pago
		);
		if($this->reserva_model->ingresar($data)){
			redirect('/');
			
		} else {
			show_404();
		}
		
	}

	function listar($id_torneo){
		$this->load->model('reserva_model');
		$data['reservas'] =  $this->reserva_model->getAll_byTorneoId($id_torneo);
		$data['main_content'] = 'listar_reservas';
		$this->load->view('includes/template', $data);
	}
}
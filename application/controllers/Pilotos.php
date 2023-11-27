<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilotos extends CI_Controller {

		 public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('piloto_model');
             
    }
 
	public function index()
	{
		$datos['pilotos']=$this->piloto_model->seleccionar_todo();
		$this->load->view('pilotos',$datos);
		$this->load->view('personal/agregar_piloto',);
	}
	public function agregar(){

		$piloto['nombre']=$this->input->post('name');
		$piloto['no_licencia']=$this->input->post('Licencia');
		$piloto['fecha_vencimiento']=$this->input->post('vencimiento');
		$piloto['pais']=$this->input->post('Pais');
		$piloto['telefono']=$this->input->post('Tel');
		$piloto['camion']=$this->input->post('Camion');
		$piloto['estado']=$this->input->post('Estado');
		$piloto['comentario']=$this->input->post('Comentario');

		$this->piloto_model->agregar($piloto);

		redirect('pilotos');

	}

	public function eliminar($id_piloto){
		$this->piloto_model->eliminar($id_piloto);
		redirect('pilotos');


	}
	public function editar($id_piloto){
	$piloto['nombre']=$this->input->post('name');
		$piloto['no_licencia']=$this->input->post('Licencia');
		$piloto['fecha_vencimiento']=$this->input->post('vencimiento');
		$piloto['pais']=$this->input->post('Pais');
		$piloto['telefono']=$this->input->post('Tel');
		$piloto['camion']=$this->input->post('Camion');
		$piloto['estado']=$this->input->post('Estado');
		$piloto['comentario']=$this->input->post('Comentario');

		$this->piloto_model->actualizar($piloto,$id_piloto);

		redirect('pilotos');

	}
}

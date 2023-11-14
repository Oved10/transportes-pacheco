<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viajes extends CI_Controller {

	   public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('viajes_model');
             
    }


	 
	public function index()
	{
		$datos['viajes']=$this->viajes_model->seleccionar_todo(); 
		$this->load->view('viajes',$datos);
		$this->load->view('viajes/agregar_viajes');
		 
	}

	public function agregar(){
		$viaje['fecha_salida']=$this->input->post('FS');
		$viaje['fecha_entrada']=$this->input->post('FE');
		$viaje['camion']=$this->input->post('truck');
		$viaje['km']=$this->input->post('KM');
		$viaje['disel']=$this->input->post('DiselC');
		$viaje['valor_viaje']=$this->input->post('PrecioV');
		$viaje['gastos']=$this->input->post('GastosV');
		$viaje['gastos_piloto']=$this->input->post('GastosP');

		$this->viajes_model->agregar($viaje);

		redirect('viajes');

	}
	public function eliminar($id_viaje){
		$this->viajes_model->eliminar($id_viaje);
		redirect('viajes');


	}
	public function editar($id_viaje){
		$viaje['fecha_salida']=$this->input->post('FS');
		$viaje['fecha_entrada']=$this->input->post('FE');
		$viaje['camion']=$this->input->post('truck');
		$viaje['km']=$this->input->post('KM');
		$viaje['disel']=$this->input->post('DiselC');
		$viaje['valor_viaje']=$this->input->post('PrecioV');
		$viaje['gastos']=$this->input->post('GastosV');
		$viaje['gastos_piloto']=$this->input->post('GastosP');


		$this->viajes_model->actualizar($viaje,$id_viaje);

		redirect('viajes');

	}


}
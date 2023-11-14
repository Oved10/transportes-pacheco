<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camion extends CI_Controller {

	   public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('camion_model');
             
    }

	public function index()
	{
		$datos['camion']=$this->camion_model->seleccionar_todo();
		$this->load->view('camion',$datos);
		$this->load->view('camion/agregar_camion');
		 
	}

	public function agregar(){
		$truck['placa']=$this->input->post('Placa');
		$truck['nombre']=$this->input->post('name');

		$this->camion_model->agregar($truck);

		redirect('camion');

	}

	public function eliminar($id_truck){
		$this->camion_model->eliminar($id_truck);
		redirect('camion');


	}
	public function editar($id_truck){
			$truck['placa']=$this->input->post('Placa');
		$truck['nombre']=$this->input->post('name');

		$this->camion_model->actualizar($truck,$id_truck);

		redirect('camion');

	}

}

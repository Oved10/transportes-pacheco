<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

	   public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('personal_model');
             
    }

 
	public function index()
	{
		$datos['personal']=$this->personal_model->seleccionar_todo();
		$this->load->view('personal',$datos);
		$this->load->view('personal/agregar_personal');
	}
	public function agregar(){

		$persona['nombre']=$this->input->post('name');
		$persona['pais']=$this->input->post('Pais');
		$persona['telefono']=$this->input->post('Tel');
		$persona['puesto']=$this->input->post('Puesto');
		$persona['estado']=$this->input->post('Estado');

		$this->personal_model->agregar($persona);

		redirect('personal');

	}

	public function eliminar($id_persona){
		$this->personal_model->eliminar($id_persona);
		redirect('personal');


	}
	public function editar($id_persona){
		$persona['nombre']=$this->input->post('name');
		$persona['pais']=$this->input->post('Pais');
		$persona['telefono']=$this->input->post('Tel');
		$persona['puesto']=$this->input->post('Puesto');
		$persona['estado']=$this->input->post('Estado');

		$this->personal_model->actualizar($persona,$id_persona);

		redirect('personal');

	}
}

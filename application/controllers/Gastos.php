<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {


	   public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('gastos_model');
             
    }

	public function index()
	{
		$datos['gastos']=$this->gastos_model->seleccionar_todo();
		$this->load->view('gastos',$datos);
		$this->load->view('gastos/agregar_gastos');
		 

		 
	}
	public function agregar(){

		$gasto['fecha']=$this->input->post('Fecha');
		$gasto['nombre']=$this->input->post('name');
		$gasto['precio']=$this->input->post('Precio');
		$gasto['camion']=$this->input->post('Camion');

		$this->gastos_model->agregar($gasto);

		redirect('gastos');

	}

	public function eliminar($id_gasto){
		$this->gastos_model->eliminar($id_gasto);
		redirect('gastos');


	}
	public function editar($id_gasto){
		$gasto['fecha']=$this->input->post('Fecha');
		$gasto['nombre']=$this->input->post('name');
		$gasto['precio']=$this->input->post('Precio');
		$gasto['camion']=$this->input->post('Camion');

		$this->gastos_model->actualizar($gasto,$id_gasto);

		redirect('gastos');

	}

}

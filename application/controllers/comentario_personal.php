<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario_personal extends CI_Controller {

	public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('Comentario_personal_model');
    }
 
	public function index()
	{
		$row['personal']=$this->Comentario_personal_model->seleccionar_todo();
		$this->load->view('personal/Comentario_personal',$row);
	}

	public function editar_comentario($id_comentario){
		$comentar['comentario']=$this->input->post('Comentario');
		 

		$this->Comentario_personal_model->actualizar_comentario($comentar,$id_comentario);

		redirect('personal');

	}
}
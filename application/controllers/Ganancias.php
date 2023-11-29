<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganancias extends CI_Controller {

	 public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('ganancias_model');
             
    }

	public function index()
	{
		$datos['viajes']=$this->ganancias_model->seleccionar_todo(); 
		$this->load->view('ganancias',$datos);
	}
}

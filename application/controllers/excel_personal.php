<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class excel_personal extends CI_Controller {

	   public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('excel_personal_model');
             
    }

	public function index()
	{
		 
		$this->load->view('personal');
		 
		 
	}

	public function exportarDatos(){

		$datos = $this->excel_personal_model->getpersonal();


	 


		$salida = '';

		$salida .=  '

		<table class="table table-dark table-striped table_id ">
                      <thead>
                        <tr>
                          <th style="background-color: black; color:gold; width: 100px">Nombre</th>
                          <th style="background-color: black; color:gold; width: 100px">Telefono</th>
                          <th style="background-color: black; color:gold; width: 100px">Puesto</th>
                          <th style="background-color: black; color:gold; width: 100px">Estado</th>
                        
                          
                       
                        </tr>
                      </thead>
                      <tbody>';
                       

                           foreach ($datos as $item){



                          	$salida .='

                          	   <tr>

                                   <td style="background-color: 333333; color: gold">'.$item->nombre .'</td>
                                   <td style="background-color: 333333; color: gold"> +'.$item->pais .' '.$item->telefono.'</td>
                                   <td style="background-color: 333333; color: gold">'. $item->puesto .'</td>
                                   <td style="background-color: 333333; color: gold">'. $item->estado .'</td>
                                   

                                </tr>

                          	 ';
                             
                        }

                            
                          
                       
          $salida .=  '</tbody>
                    </table>';

        header('Content-Type: application/xls');
		header('Content-Disposition: attachment; filename=ReporteDelPersonal.xls');
		header('Expires: 0');

		echo $salida;

		

		 

	}
}
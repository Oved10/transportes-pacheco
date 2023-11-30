<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class excel_pilotos extends CI_Controller {

     public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->model('excel_pilotos_model');
             
    }

  public function index()
  {
     
    $this->load->view('pilotos');
     
     
  }

  public function exportarDatos(){

    $datos = $this->excel_pilotos_model->getpiloto();


   


    $salida = '';

    $salida .=  '
    <h1>Reporte de pilotos</h1>
    <table id=“” class=“table table-striped table-bordered”>
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>No.Licencia</th>
                          <th>Fecha De Vencimiento</th>
                          <th>Telefono</th>
                          <th>Camión</th>
                          <th>Estado</th>

                        </tr>
                      </thead>
                      <tbody>';
                       

                           foreach ($datos as $item){



                            $salida .='

                               <tr>

                                   <td style="background-color: 333333; color: gold">'.$item->nombre .'</td>
                                   <td style="background-color: 333333; color: gold">'. $item->no_licencia .'</td>
                                   <td style="background-color: 333333; color: gold">'. $item->fecha_vencimiento .'</td>
                                   <td style="background-color: 333333; color: gold"> +'.$item->pais .' '.$item->telefono.'</td>
                                    <td style="background-color: 333333; color: gold">'. $item->camion .'</td>
                                     <td style="background-color: 333333; color: gold">'. $item->estado .'</td>

                                </tr>

                             ';
                             
                        }

                            
                          
                       
          $salida .=  '</tbody>
                    </table>';

        header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=ReporteDePilotos.xls');
    header('Expires: 0');

    echo $salida;

    

     

  }
}
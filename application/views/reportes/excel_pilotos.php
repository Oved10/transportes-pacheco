<?php

require_once ("_db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reportePersonal.xls");
?>
<table class="table table-dark table-striped table_id ">
                      <thead>
                        <tr>
                          <img src="public/img/fondo.jpeg"/>
                        </tr>>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">No.Licencia</th>
                          <th scope="col">Fecha De Vencimiento</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Camion</th>
                          <th scope="col">Estado   </th>
                          
                       
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $count =1;

                          foreach ($personal as $persona):?>
                             
                                <tr>

                                   <td><?php echo $count++ ?></td>
                                   <td><?php echo $persona->nombre ?></td>
                                   <td>+<?php echo $persona->pais ?> <?php echo $persona->telefono ?> </td>
                                   <td><?php echo $persona->puesto ?></td>
                                   <td><?php echo $persona->estado ?></td>
                                   <td><?php echo '  
                                    <button type="button" class="btn btn-info text-white"
                                   data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"

                                    onclick="llenar_datos('.$persona->id.',`'.$persona->nombre.'`,`'.$persona->pais.'`,`'.$persona->telefono.'`,`'.$persona->puesto.'`,`'.$persona->estado.'`,`'.$persona->comentario.'`)"><i class="bi bi-pencil"></i> </button>

                                    <a href="'.base_url('index.php/personal/eliminar/'.$persona->id).'" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i><a/>

                                    </td>  
                                   '?>


                                </tr>

                            
                          
                        <?php endforeach; ?>
                      </tbody>
                    </table>
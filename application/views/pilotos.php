<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transportes Pacheco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/estilos.css') ?>">
        <script src="https://kit.fontawesome.com/273a33183e.js" crossorigin="anonymous"></script>
        <style type="text/css">
         
           .btn-b{
            display: inline-block;
            margin: 20px 10px;
            background-color: black;
            color: yellow;
            padding: 10px 73px;
            text-decoration: none;
            }
            .btn-v{
              display: inline-block;
              margin: 20px 10px;
              background-color: black;
              color: yellow;
              padding: 12px 80px;
              text-decoration: none;

            }
              .btn-p{
              display: inline-block;
              margin: 20px 10px;
              background-color: black;
              color: yellow;
              padding: 10px 63px;
              text-decoration: none;

            }
            .titulo{
              font-size: 20px;
            }
            body{
              background: #BA8B02;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #181818, #BA8B02);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #181818, #BA8B02); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }


        </style>

  </head>
  <body> 

      <!--Menu Lateral-->
      <div class="d-flex">
        <div id="sidebar-container"class="bg-warning">
          <div class="logo">
            <h4 class="text-dark font-weight-bold my-3 mx-5">Transportes Pacheco</h4><img src="<?= base_url('public/img/logo.jpg')?>" class="img-fluid rounded-circle logo mr-2 mx-5">
            <br>
            
          </div>
          <div class="menu">
            <a class="btn-v mx-3" href="<?= base_url("index.php/Viajes")?>" class="d-block text-light my-3 p-3"><i class="fa-sharp fa-solid fa-road mx-2 lead"></i>Viaje</a>
            <a class="btn-b mx-3" href="<?= base_url("index.php/camion")?>" class="d-block text-light p-3"><i class="bi bi-truck mx-2 lead"></i>Camion</a>
             <div class="btn-group dropend">
            <button class="btn-p mx-3 " type="button" data-bs-toggle="dropdown"><i class="bi bi-people-fill mx-2 lead"></i>
            Personal
            </button>
            <ul class="dropdown-menu text-bg-warning "   >
              <li><a class="dropdown-item" href="<?= base_url('index.php/Pilotos')?>">Pilotos</a></li>
              <li><a class="dropdown-item" href="<?= base_url('index.php/personal')?>">Personal</a></li>
            
            </ul>
          </div>
            <a  class="btn-b mx-3" href="<?= base_url("index.php/Gastos")?>" class="d-block text-light p-3"><i class="bi bi-gear mx-2 lead"></i>Gastos</a>
          </div>
          
        </div>  

        <div class="w-100">
          <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link active titulo" style="color: gold" aria-current="page" href="">Registro De Pilotos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!--Datos-->
           <div class="container-fluid my-5">
            <div class="mb-5">
              <form>  
                <div class="row">
                   <h5  style="color: white">Buscar Por:</h5>
                  <div class="form-group col-sm-4">
                    <label for=""  style="color: white" >Nombre</label>
                    <input type="text" name="name" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese El Nombre" id="name">
                  </div> 
                    <div class="form-group col-sm-4">
                    <label for=""  style="color: white" >Camion</label>
                    <input type="text" name="Puesto" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese El Camion" id="Puesto">
                  </div>  

                    <div class="form-group col-sm-4">
                    <label for=""   style="color: white">Estado</label>
                    <input type="text" name="Estado" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese El Estado" id="Estado"><br>
                    
                  </div> 



                </div>
                <div class="d-grid gap-2 d-md-block my-5">
                      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-plus"></i>Agregar</button>
                     <button type="submit" class="btn btn-success btn-block " style="padding: 8px 20px "><i class="fa-solid fa-file-excel"></i> Excel </button>
                
                </div>
                
                
              </form>
              
            </div>
            <div class="row">
              <div class="col-12">           
                <div class="card-header">                                
                </div>
                <div class="card-body">
                  <table class="table table-dark table-striped table_id ">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">No.Licencia</th>
                          <th scope="col">Fecha De Vencimiento</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Camion</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Acciones</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $count =1;

                          foreach ($pilotos as $piloto):?>
                             
                                <tr>

                                   <td><?php echo $count++ ?></td>
                                   <td><?php echo $piloto->nombre ?></td>
                                   <td><?php echo $piloto->no_licencia ?> </td>
                                   <td><?php echo $piloto->fecha_vencimiento ?> </td>
                                   <td>+<?php echo $piloto->pais ?> <?php echo $piloto->telefono ?></td>
                                   <td><?php echo $piloto->camion ?></td>
                                   <td><?php echo $piloto->estado ?></td>
                                   <td><?php echo ' <button type="button" class="btn btn-info text-white"
                                   data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"

                                    onclick="llenar_datos('.$piloto->id.',`'.$piloto->nombre.'`,`'.$piloto->no_licencia.'`,`'.$piloto->fecha_vencimiento.'`,`'.$piloto->pais.'`,`'.$piloto->telefono.'`,`'.$piloto->camion.'`,`'.$piloto->estado.'`,`'.$piloto->comentario.'`)"><i class="bi bi-pencil"></i> </button>

                                     <a href="'.base_url('index.php/pilotos/eliminar/'.$piloto->id).'" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i><a/>

                                     </td>'?>
                                 


                                </tr>

                            
                          
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  
                </div>
               </div>

              
            </div>
            
          </div>
           <!-- Fin Datos-->
          
        </div>  

     </div>


      <!-- Fin Menu Lateral-->

     
    <script src="<?= base_url('public/js/buscar_camion.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
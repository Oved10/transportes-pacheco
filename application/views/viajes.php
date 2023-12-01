<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >Transportes Pacheco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
         
        <script src="https://kit.fontawesome.com/273a33183e.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

         <!--Componentes De Datatables-->

              <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <!--  Datatables Responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">






    <link rel="stylesheet" type="text/css" href="<?= base_url('public/estilos.css') ?>">

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
              padding: 10px 83px;
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
            .btn-g{
              display: inline-block;
              margin: 20px 10px;
              background-color: black;
              color: yellow;
              padding: 10px 60px;
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
            <h4 class="text-dark font-weight-bold my-3 mx-5" style="   font-family: Alegrian;   font-size: 30px ; text-align: center;">Transportes Pacheco</h4><img src="<?= base_url('public/img/logo.jpg')?>" class="img-fluid rounded-circle logo mr-2 mx-5">
            <br>
            
          </div>
          <div class="menu">
            <a class="btn-v mx-3
            " href="<?= base_url("index.php/Viajes")?>" class="d-block text-light my-3 p-3"><i class="bi bi-sign-merge-right mx-2 lead"></i>Viaje</a>
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
            <a  class="btn-g mx-3" href="<?= base_url("index.php/Ganancias")?>" class="d-block text-light p-3"><i class="bi bi-currency-dollar mx-2 lead"></i>Ganancias</a>
          </div>
          
        </div>  

        <div class="w-100">
          <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link active titulo" style="color: gold" aria-current="page" href="">Registro De Viajes</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!--Contenido-->
          <div class="container-fluid my-5">
            <div class="">
              <form action="<?php  base_url();?> viajes/exportarDatos" method="post"> 
                <div class="row">
                  <h5  style="color: white">Buscar Por:</h5>
                  <div class="form-group col-sm-4">
                    <label for="" style="color: white">Fecha De Salida</label>
                    <input type="date" name="desde" class="form-control me-2 light-table-filter"  id="desde" data-table="table_id" >
                  </div>  



                  <div class="form-group col-sm-4">
                    <label for="" style="color: white" >Fecha De Entrada</label>
                    <input type="date" name="hasta" class="form-control me-2 light-table-filter"   id="hasta" data-table="table_id">
                  </div> 

                  <div class="form-group col-sm-4">
                    <label for="" style="color: white" >Placa Del Camion</label>
                    <input type="text" name="camion" class="form-control me-2 light-table-filter" id="camion" data-table="table_id" >

                  </div> 

                   

                      <div class="d-grid gap-2 d-md-block  ">
                      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-plus-lg"></i> Agregar</button>


                </div>
                

                </div>
                     
                
             </form>
                  
                </div>
                <div class="row">
                  <div class="col-12">           
                    <div class="card-header">                                
                    </div>
                    <div class="card-body">
                      <table id="dataviaje" class="table table-striped table-bordered table-warning table_id ">
                          <thead>
                            <tr>
                                <th >No.</th>
                               <th >Fecha De Entrada</th>
                              <th >Fecha De salida</th>                           
                              <th >Camion</th>
                              <th scope="col">Valor De Viaje</th>
                              <th scope="col">Precio Diesel</th>
                              <th scope="col">Diesel Consumido</th>
                              <th scope="col">Gastos De Viaje</th>
                               <th scope="col">Total Del Viaje</th>
                              <th scope="col">Editar</th>
                              <th scope="col">Eliminar</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                              $count =1;

                              foreach ($viajes as $viaje):?>
                               
                                    <tr>

                                       <td><?php echo $count++ ?></td>                                        
                                      <td><?php echo $viaje->fecha_entrada ;?>  </td>
                                       <td><?php echo  $viaje->fecha_salida?> </td>
                                       <td><?php echo $viaje->camion; ?> </td>
                                       <td>Q.<?php echo number_format($viaje->valor_viaje  ); ?> </td>
                                        <td>Q.<?php echo number_format($viaje->precio_disel ) ; ?> </td>
                                       <td><?php echo $viaje->disel ?> gal</td>                                     
                                       <td>Q.<?php echo number_format($viaje->gastos )  ?> </td>
                                        <td>

                                          Q.<?php $total=0; ?> 

                                          <?php $MD=0; ?> <?php $D=$viaje->disel ?> <?php $P=$viaje->precio_disel ?><?php $G=$viaje->gastos ?> <?php $Vv=$viaje->valor_viaje ?>
                                          <?php $MD=$P*$D?> <?php $total=$Vv-$MD-$G ?>

                                          <?php echo number_format($total); ?>

                                      </td>
                                       <td> <?php echo '   <button type="button" class="btn btn-warning text-white"
                                       data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                                        onclick="llenar_datos('.$viaje->id.',`'.$viaje->fecha_salida.'`,`'.$viaje->fecha_entrada.'`,`'.$viaje->camion.'`,`'.$viaje->valor_viaje.'`,`'.$viaje->precio_disel.'`,`'.$viaje->disel.'`,`'.$viaje->gastos.'`)"><i class="bi bi-pencil-square"></i> </button> </td>
                                        <td><a href="'.base_url('index.php/viajes/eliminar/'.$viaje->id).'" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i><a/></td>'; ?>


                                    </tr>

                                
                              
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      
                    </div>
                   </div>

                  
                </div>
                
              </div>
          
          </div>  
          <!-- Fin Contenido-->          
          

      
     </div>
      <!-- Fin Menu Lateral-->



 

    <script src="<?= base_url('public/js/buscar_viaje.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!--Libreria De DataTableJS-->
        <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <!-- Datatables responsive -->

    <script type="text/javascript " src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/searchbuilder/1.6.0/js/dataTables.searchBuilder.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
    

  <script>
        $(document).ready(function(){
            $('#dataviaje').DataTable({

                responsive: true,
                lengthMenu: [3,6,10],
                 columnDefs: [
                { className: "centered", targets: [0, 1, 2, 3, 4, 5, 6] },
                { orderable: false, targets: [5, 6] },
                { searchable: false, targets: [1] }
                //{ width: "50%", targets: [0] }
            ],
            pageLength: 3,
             destroy: true,
                       dom: 'Q Bfrtip ',
            buttons: [ {
            extend: 'excelHtml5',
            text:      '<integrity class="bi bi-file-earmark-excel-fill"> Excel</i> ',
            autoFilter: true,
            sheetName: 'Exported data',
            className: 'btn btn-success'
        } ],
            language: {
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %ds fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir",
        "renameState": "Cambiar nombre",
        "updateState": "Actualizar",
        "createState": "Crear Estado",
        "removeAllStates": "Remover Estados",
        "removeState": "Remover",
        "savedStates": "Estados Guardados",
        "stateRestore": "Estado %d"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "not": "Diferente de",
                "after": "Después",
                "notEmpty": "No Vacío"
            },
            "number": {
                "between": "Entre",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de",
                "empty": "Vacío"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "startsWith": "Empieza con",
                "not": "Diferente de",
                "notContains": "No Contiene",
                "notStartsWith": "No empieza con",
                "notEndsWith": "No termina con",
                "notEmpty": "No Vacío"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d",
        "showMessage": "Mostrar Todo",
        "collapseMessage": "Colapsar Todo"
    },
    "select": {
        "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        },
        "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        "weekdays": {
            "0": "Dom",
            "1": "Lun",
            "2": "Mar",
            "4": "Jue",
            "5": "Vie",
            "3": "Mié",
            "6": "Sáb"
        },
        "next": "Próximo"
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro de que desea eliminar %d filas?",
                "1": "¿Está seguro de que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga clic o pulse aquí, de lo contrario conservarán sus valores individuales."
        }
    },
    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "stateRestore": {
        "creationModal": {
            "button": "Crear",
            "name": "Nombre:",
            "order": "Clasificación",
            "paging": "Paginación",
            "select": "Seleccionar",
            "columns": {
                "search": "Búsqueda de Columna",
                "visible": "Visibilidad de Columna"
            },
            "title": "Crear Nuevo Estado",
            "toggleLabel": "Incluir:",
            "scroller": "Posición de desplazamiento",
            "search": "Búsqueda",
            "searchBuilder": "Búsqueda avanzada"
        },
        "removeJoiner": "y",
        "removeSubmit": "Eliminar",
        "renameButton": "Cambiar Nombre",
        "duplicateError": "Ya existe un Estado con este nombre.",
        "emptyStates": "No hay Estados guardados",
        "removeTitle": "Remover Estado",
        "renameTitle": "Cambiar Nombre Estado",
        "emptyError": "El nombre no puede estar vacío.",
        "removeConfirm": "¿Seguro que quiere eliminar %s?",
        "removeError": "Error al eliminar el Estado",
        "renameLabel": "Nuevo nombre para %s:"
    },
    "infoThousands": "."
} 



            });


        });


        
    </script>

  </body>
</html>
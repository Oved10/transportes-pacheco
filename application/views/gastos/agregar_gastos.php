<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 

<div class="offcanvas offcanvas-end text-bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="agregar_gastos" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Gastos</h5>
    <button  onclick="document.location.reload();" type="button" class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
  </div>
  <div class="offcanvas-body">
      <div class="container-fluid my-5">
            <div class="mb-5">
              <?php echo form_open('Gastos/agregar',['id' => 'form-gasto']);?>
                <div class="row">
                  <div class="form-group col-sm-12">
                    <label for=""  >Fecha</label>
                    <input type="date" name="Fecha" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese La Fecha" id="F">
                  </div>  

                    <div class="form-group col-sm-12">
                    <label for=""  >Nombre</label>
                    <input type="text" name="name" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Nombre Del Gasto" id="N"><br>
                    
                  </div> 
                    <div class="form-group col-sm-12">
                    <label for=""  >Precio</label>
                    <input type="text" name="Precio" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Precio Del Gasto" id="P"><br>
                    
                  </div>
                    <div class="form-group col-sm-12">
                    <label for=""  >Camion</label>
                    <input type="text" name="Camion" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Nombre Del Camion" id="C"><br>
                    
                  </div>


                </div>
                <div class="d-grid gap-2 d-md-block my-5">
                 <button type="submit" class="btn btn-primary btn-block " style="padding: 8px 70px "><i class="fa-solid fa-floppy-disk"></i> Guardar </button> 
                 
                
                </div>
                
                
              <?php echo form_close();?>
  </div>
</div>

<script>

        let url="<?php  echo base_url('index.php/gastos/editar');?>";

        
        const llenar_datos=(id,fecha,nombre,precio,camion)=>{
           let path = url+"/"+id;
           document.getElementById('form-gasto').setAttribute('action',path);

          document.getElementById('F').value= fecha;
          document.getElementById('N').value= nombre;
           document.getElementById('P').value= precio;
          document.getElementById('C').value= camion;

        };
      </script>

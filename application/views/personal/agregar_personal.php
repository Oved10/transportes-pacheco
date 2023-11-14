<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 

<div class="offcanvas offcanvas-end text-bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h4 class="offcanvas-title" id="offcanvasScrollingLabel">Personal</h4>
    <button  onclick="document.location.reload();" type="button" class=" btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
  </div>
  <div class="offcanvas-body">
    <div class="container-fluid my-5">
            <div class="mb-5">
              <?php echo form_open('Personal/agregar',['id' => 'form-persona']);?> 
                <div class="row">
                  <div class="form-group col-sm-12 my-1 ">
                    <label for=""  style="color: white" >Nombre</label>
                    <input type="text" name="name" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese El Nombre" id="N">
                  </div> 

                   <div class="form-group col-sm-3 my-2">
                    <label for=""   style="color: white">Pais</label>
                    <input type="text" name="Pais" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="+" id="P"><br>
                    
                  </div> 

                    <div class="form-group col-sm-9 my-2">
                    <label for=""   style="color: white">Telefono</label>
                    <input type="text" name="Tel" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Numero De Telefono" id="T"><br>
                    
                  </div> 
                    <div class="form-group col-sm-12 my-2">
                    <label for=""  style="color: white" >Puesto</label>
                    <input type="text" name="Puesto" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese El Puesto" id="Pues">
                  </div>  

                    <div class="form-group col-sm-12 my-2">
                    <label for=""   style="color: white">Estado</label>
                    <input type="text" name="Estado" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Nombre Del Camion" id="E"><br>
                    
                  </div> 



                </div>
                <div class="d-grid gap-2 d-md-block my-3">
                 <button type="submit" class="btn btn-primary btn-block " style="padding: 8px 70px "><i class="fa-solid fa-floppy-disk"></i> Guardar </button>              
                </div>
                
                
               <?php echo form_close();?>
              
            </div>
  </div>
</div>
<script>

        let url="<?php  echo base_url('index.php/personal/editar');?>";

        
        const llenar_datos=(id,nombre,pais,telefono,puesto,estado)=>{
           let path = url+"/"+id;
           document.getElementById('form-persona').setAttribute('action',path);

          document.getElementById('N').value= nombre;
          document.getElementById('P').value= pais;
           document.getElementById('T').value= telefono;
          document.getElementById('Pues').value= puesto;
          document.getElementById('E').value= estado;

        };
      </script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 

<div class="offcanvas offcanvas-end text-bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Camiones</h5>
    <button   onclick="document.location.reload();"type="button" class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
  </div>
  <div class="offcanvas-body">

    <div class="mb-5">
              <?php echo form_open('Camion/agregar',['id' => 'form-truck']);?>
                <div class="row">
                  <div class="form-group col-sm-12 my-3">
                    <label for=""  >Placa</label>
                    <input type="text" name="Placa" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese La Placa" id="Placa">
                  </div>  

                    <div class="form-group col-sm-12 my-3">
                    <label for=""  >Nombre</label>
                    <input type="text" name="name" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Nombre Del Camion" id="name"><br>
                    
                  </div> 


                </div>
                <div class="d-grid gap-2 d-md-block my-2">
                   <button type="submit" class="btn btn-primary btn-block " style="padding: 8px 70px "><i class="fa-solid fa-floppy-disk"></i> Guardar </button>  

                
                </div>
                
                
              <?php echo form_close();?>
              
            </div>
  </div>
</div>

  <script>

        let url="<?php  echo base_url('index.php/camion/editar');?>";

        
        const llenar_datos=(id,placa,nombre)=>{
           let path = url+"/"+id;
           document.getElementById('form-truck').setAttribute('action',path);

          document.getElementById('Placa').value= placa;
          document.getElementById('name').value= nombre;

        };
      </script>
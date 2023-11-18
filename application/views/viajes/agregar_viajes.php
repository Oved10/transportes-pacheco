<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 

<div class="offcanvas offcanvas-end text-bg-dark"  data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Viajes</h5>
    <button  onclick="document.location.reload();" type="button" class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
  </div>
  <div class="offcanvas-body">
    <div class="container-fluid my-5">
            <div class="mb-5">
              <?php echo form_open('Viajes/agregar',['id' => 'form-viaje']);?>
                <div class="row">
                  <div class="form-group col-sm-12 ">
                    <label for="" style="color: white">Fecha De Salida</label>
                    <input type="date" name="FS" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese La Fecha" id="FS">
                  </div>  

                  <div class="form-group col-sm-12 my-3">
                    <label for="" style="color: white" >Fecha De Entrada</label>
                    <input type="date" name="FE" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese La Fecha" id="FE">
                  </div> 

                  <div class="form-group col-sm-12 my-3">
                    <label for="" style="color: white" >Camion</label>
                    <input type="text" name="truck" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese El Camion" id="truck">
                  </div> 
                  <div class="form-group col-sm-12 my-3">
                    <label for=""  style="color: white">Km Recorridos</label>
                    <input type="text" name="KM" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese los Km" id="KM">
                  </div> 

                  <div class="form-group col-sm-12 my-3">
                    <label for=""  style="color: white">Disel Consumido</label>
                    <input type="text" name="DiselC" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Ingrese los Galones" id="DiselC">
                  </div> 

                  <div class="form-group col-sm-12 my-3">
                    <label for="" style="color: white" >Precio Del Viaje</label>
                    <input type="text" name="PrecioV" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Q." id="PrecioV">
                  </div> 


                    <div class="form-group col-sm-12 my-3">
                    <label for="" style="color: white" >Gastos</label>
                    <input type="text" name="GastosV" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Q." id="GastosV"><br>
                    
                  </div> 
                     <div class="form-group col-sm-12 my-3">
                    <label for="" style="color: white" >Gastos Piloto</label>
                    <input type="text" name="GastosP" class="form-control me-2 light-table-filter" data-table="table_id" required placeholder="Q." id="GastosP"><br>
                    
                  </div>


                </div>
                <div class="d-grid gap-2 d-md-block my-2">
                   <button type="submit" class="btn btn-primary btn-block " style="padding: 8px 70px "><i class="fa-solid fa-floppy-disk"></i> Guardar </button>
                    
                
                </div>
                
                
              <?php echo form_close();?>


  </div>
</div>

        <script>

        let url="<?php  echo base_url('index.php/viajes/editar');?>";

        
        const llenar_datos=(id,fecha_salida,fecha_entrada,camion,km,disel,valor_viaje,gastos,gastos_piloto)=>{
           let path = url+"/"+id;
            document.getElementById('form-viaje').setAttribute('action',path);

          document.getElementById('FS').value= fecha_salida;
          document.getElementById('FE').value= fecha_entrada;
          document.getElementById('truck').value= camion;
          document.getElementById('KM').value= km;
          document.getElementById('DiselC').value= disel;
          document.getElementById('PrecioV').value= valor_viaje;
          document.getElementById('GastosV').value= gastos;
          document.getElementById('GastosP').value= gastos_piloto;

        };
      </script>
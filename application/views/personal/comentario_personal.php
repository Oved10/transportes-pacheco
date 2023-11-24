<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="conteiner py-4">
 	<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-bg-warning">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black">Comentario De Personal</h1>
        <button onclick="document.location.reload();" type="button" class=" btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body text-bg-dark">
        
        <?php echo form_open('Personal/agregar',['id' => 'form-persona']);?> 

		     <div class="mb-3">
			  <label for="" class="form-label">Agregar Comentario</label>
			  <textarea class="form-control" name="Comentario" id="C" rows="3"></textarea>
			</div>

      <?php 
        foreach ($personal  as $comentar ):?>

          <?php echo $comentar->comentario ?>
           
        
       <?php endforeach ?>
          <button type="button" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guradar</button>
        <button type="button" class="btn btn-warning text-white"> <i class="bi bi-pencil-square"></i> Editar</button>
        <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i> Eliminar</button>

        <?php echo form_close();?>

      </div>
      <div class="modal-footer text-bg-dark">
     
      </div>
    </div>
  </div>
</div>
 	
 </div>

  <!--<script>

        let url="<?php  echo base_url('index.php/comentario_personal/editar_comentario');?>";

        
        const comentar=(id,comentario)=>{
           let path = url+"/"+id;
           document.getElementById('form-persona').setAttribute('action',path);

          document.getElementById('C').value= comentario;
       

        };
      </script>-->
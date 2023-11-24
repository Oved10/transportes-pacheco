<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Comentario_personal_model extends CI_Model {

	public function actualizar_comentario ($comentar,$id_comentario){
		$this->db->where('id',$id_comentario);
		$this->db->update('personal',$comentar);
	}
}
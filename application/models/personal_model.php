<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Personal_model extends CI_Model {
	public function agregar($persona){

		$this->db->insert('personal',$persona);

	}

	public function seleccionar_todo(){

		$this->db->select('*');
		$this->db->from('personal');
		return $this->db->get()->result();

	}

	public function eliminar($id_persona){
		$this->db->where('id',$id_persona);
		$this->db->delete('personal');

	}

	public function actualizar ($persona,$id_persona){
		$this->db->where('id',$id_persona);
		$this->db->update('personal',$persona);
	}
  }
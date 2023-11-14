<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Piloto_model extends CI_Model {
	public function agregar($piloto){

		$this->db->insert('pilotos',$piloto);

	}

	public function seleccionar_todo(){

		$this->db->select('*');
		$this->db->from('pilotos');
		return $this->db->get()->result();

	}

	public function eliminar($id_pilotos){
		$this->db->where('id',$id_pilotos);
		$this->db->delete('pilotos');

	}

	public function actualizar ($piloto,$id_pilotos){
		$this->db->where('id',$id_pilotos);
		$this->db->update('pilotos',$piloto);
	}
  }
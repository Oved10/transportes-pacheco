<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Viajes_model extends CI_Model {
	public function agregar($viaje){

		$this->db->insert('viajes',$viaje);

	}

	public function seleccionar_todo(){

		$this->db->select('*');
		$this->db->from('viajes');
		return $this->db->get()->result();

	}

	public function eliminar($id_viaje){
		$this->db->where('id',$id_viaje);
		$this->db->delete('viajes');

	}

	public function actualizar ($viaje,$id_viaje){
		$this->db->where('id',$id_viaje);
		$this->db->update('viajes',$viaje);
	}
  }
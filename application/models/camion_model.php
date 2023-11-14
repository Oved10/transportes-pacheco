<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Camion_model extends CI_Model {
	public function agregar($truck){

		$this->db->insert('camion',$truck);

	}

	public function seleccionar_todo(){

		$this->db->select('*');
		$this->db->from('camion');
		return $this->db->get()->result();

	}

	public function eliminar($id_truck){
		$this->db->where('id',$id_truck);
		$this->db->delete('camion');

	}

	public function actualizar ($truck,$id_truck){
		$this->db->where('id',$id_truck);
		$this->db->update('camion',$truck);
	}
  }
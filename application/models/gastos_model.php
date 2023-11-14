<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Gastos_model extends CI_Model {
	public function agregar($gasto){

		$this->db->insert('gastos',$gasto);

	}

	public function seleccionar_todo(){

		$this->db->select('*');
		$this->db->from('gastos');
		return $this->db->get()->result();

	}

	public function eliminar($id_gasto){
		$this->db->where('id',$id_gasto);
		$this->db->delete('gastos');

	}

	public function actualizar ($gasto,$id_gasto){
		$this->db->where('id',$id_gasto);
		$this->db->update('gastos',$gasto);
	}
  }
<?php if (! defined ('BASEPATH')) exit('No direct script access allowed ');

class Ganancias_model extends CI_Model {

	public function seleccionar_todo(){

		$this->db->select('*');
		$this->db->from('viajes');
		return $this->db->get()->result();

	}

}
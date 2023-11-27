<?php

/**
* 
*/
class Excel_personal_model extends CI_Model
{
	
	public function getPersona(){
		$this->db->select('nombre, telefono, puesto, estado, comentario');
		$this->db->from('personal');
		$query = $this->db->get();
					
		return $query;
	}

	/*public function getPersonas(){
		$this->db->select('nombre, telefono, puesto, estado, comentario');
		$this->db->from('personal');
		$query = $this->db->get();
					
		return $query->result();
	}*/
}
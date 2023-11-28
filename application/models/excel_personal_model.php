 <?php 

 	class Excel_personal_model extends CI_Model{

 		public function getpersonal(){

 			$this->db->select('nombre, pais, telefono, puesto, estado');
 			$this->db->from('personal');

 			$r = $this->db->get();
 			return $r->result();

 		}
 	}

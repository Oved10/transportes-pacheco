 <?php 

 	class excel_pilotos_model extends CI_Model{

 		public function getpiloto(){

 			$this->db->select('nombre, no_licencia, fecha_vencimiento, pais, telefono, camion, estado, comentario');
 			$this->db->from('pilotos');

 			$r = $this->db->get();
 			return $r->result();

 		}
 	}

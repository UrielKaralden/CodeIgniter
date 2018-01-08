<?php
	class videos_model extends CI_Model{
		public function _construct(){
			parent::_construct();
		}
		
		public function get_videos(){
			$consulta = $this->db->query('Select * from videos;');
			return $consulta->result();
		}
	}
?>
<?php
	class videos_model extends CI_Model{
		public function _construct(){
			parent::_construct();
		}

		public function get_articulos(){
			$consulta = $this->db->query('Select * from videos;');
			return $consulta->result();
		}

		function get_search()
		{
			$match = $this->input->post('search');
			$this->db->like('url_video',$match);
			$this->db->or_like('usuario', $match);
			$this->db->or_like('titulo', $match);
			$this->db->or_like('Fecha', $match);
			$query = $this->db->get('videos');
			return $query->result();
		}
	}
?>

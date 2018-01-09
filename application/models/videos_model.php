<?php
	class Videos_model extends CI_Model{
		public function _construct(){
			parent::_construct();
		}

		public function get_videos(){
			$consulta = $this->db->query('Select * from videos;');
			return $consulta->result();
		}

		public function upload_video(){
			 $new_video = array(
				'url_video' => $this->input->post('url_video', TRUE),
	            'usuario'   => $this->comentarios_model->get_usuario(),
				'desc'		=> $this->input->post('desc', TRUE),
	            'titulo'    => $this->input->post('pass', TRUE));
        	$this->db->insert('videos', $new_video);
		}
	}
?>

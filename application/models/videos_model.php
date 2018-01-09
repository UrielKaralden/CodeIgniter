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
				'descripcion'		=> $this->input->post('desc', TRUE),
	            'titulo'    => $this->input->post('titulo', TRUE));
        	$this->db->insert('videos', $new_video);
			$this->db->query('Insert into videos values("","'.$this->input->post('url_video').'","
			'.$this->comentarios_model->get_usuario().'","'.$this->input->post('desc').'","CURRENT_TIMESTAMP","'.$this->input->post('titulo').'")');
		}

		public function login($user)
		{
			$this->db->query('Update usuarios set conectado = 0 where usuario = ?;',$user);
		}
		public function logout($user)
		{
			$this->db->query('Update usuarios set conectado = 1 where usuario = ?;',$user);
		}
	}
?>

<?php
	class Comentarios_model extends CI_Model{
		public function _construct(){
			parent::_construct();
		}

		public function get_comentarios($id){
			$consulta = $this->db->query('Select * from comentarios where id_videos=?;',$id);
			return $consulta->result();
		}

		public function get_usuario(){
			$consulta = $this->db->query('Select * from usuarios where conectado=?;','0');
			$result = $consulta->row();

			return $result->usuario;
		}

		public function add_comentario(){
			$this->db->query('Insert into comentarios
			values("","'.$this->input->post('texto').'","'.$this->input->post('iden').'","'.$this->input->post('user').'")');
		}
	}
?>

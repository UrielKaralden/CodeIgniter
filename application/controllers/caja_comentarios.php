<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class caja_comentarios extends CI_Controller{
		public function _construct(){
			parent::_construct();
		}

		public function index(){
		}

		function comment($id,$url,$user,$title){
			$datos = array(	'act_user' => $this->comentarios_model->get_usuario(),
							'id'=>$id,
							'url'=>$url,
							'usuario'=>$user,
							'titulo'=>$title);
			$this->load->view('caja_comentarios_view',$datos);
		}

		function add($url,$user,$title){
			$data=array(		'id'=>$this->input->post('iden'),
								'texto'=>$this->input->post('texto'),
								'usuario'=>$this->input->post('user'));

					$this->comentarios_model->add_comentario();
					$datos = array('titulo_web' => 'Comentarios', 'comentarios' => $this->comentarios_model->get_comentarios($this->input->post('iden')),
									'id'=>$this->input->post('iden'),
									'url'=>$url,
									'usuario'=>$user,
									'titulo'=>$title);

					$this->load->view('comentarios_view',$datos);
		}
	}
?>

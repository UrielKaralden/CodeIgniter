<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	class Comentarios extends CI_Controller{
		public function _construct(){
			parent::_construct();
			$this->load->model('comentarios_model');
		}
		
		public function index(){}
		
		function com($id,$url,$user,$title){
			$datos = array('titulo_web' => 'Comentarios', 'comentarios' => $this->comentarios_model->get_comentarios($id),
						  'id'=>$id,
						  'url'=>$url,
						  'usuario'=>$user,
						  'titulo'=>$title);
			
			$this->load->view('comentarios_view',$datos);
		}			
	}
?>

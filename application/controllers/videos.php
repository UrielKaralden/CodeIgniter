<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	class videos extends CI_Controller{
		public function _construct(){
			parent::_construct();
		}

		public function index()
		{
			$this->load->view('usuarios_view');
		}

		function vid($id,$url,$user,$title){
			$url_base=$url;
			$url=base_url()."videos/".$url;
			$data = array('id'=>$id,
						  'url'=>$url,
						  'url_base'=>$url_base,
						  'usuario'=>$user,
						  'titulo'=>$title);

			$this->load->view('videos_view',$data);
		}

		function go_higher()
		{
			$this->load->view('subir_video_view');
		}
	}
?>

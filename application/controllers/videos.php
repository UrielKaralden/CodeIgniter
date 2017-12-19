<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	class videos extends CI_Controller{
		public function _construct(){
			parent::_construct();
		}
		
		public function index(){}
		
		function vid($url,$user,$title){
			$url=base_url()."videos/".$url;
			$data = array('url'=>$url,
						  'usuario'=>$user,
						  'titulo'=>$title);
			
			$this->load->view('videos_view',$data);
		}
	}
?>
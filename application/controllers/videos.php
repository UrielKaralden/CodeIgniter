<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	class videos extends CI_Controller{
		public function _construct(){
			parent::_construct();
		}

		public function index()
		{
			$url = base_url()."home/";
			$this->load->view('first_view');
		}

		function video($url,$user,$title){
			$url=base_url().'videos/'.$url;
			$data = array('url'=>$url,
						  'usuario'=>$user,
						  'titulo'=>$title);

			$this->load->view('videos_view',$data);
		}

		function search()
		{
			echo 'Hola soy Edu feliz navidad';
			echo $this->input->post('Buscar');
			/*$config['url'] = base_url()."search/page/";
			$config['total_rows'] = 50;
			$config['row_per_page'] = 10;

			$this->videos_model->get_search($this->input->post('Buscar'));

			$this->pagination->initialize($config);
			$data['query'] = $this->videos_model->get_search();
			$this->load->view('search_view', $data);*/
		}


	}
?>

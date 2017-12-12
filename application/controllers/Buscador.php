<?php
    error_reporting (E_ALL ^E_DEPRECATED);

    class Buscador extends CI_Controller
    {
        public function _construct()
        {
            parent::_construct();
        }

        public function index()
        {
            $view_data = array();
            $view_data['content'] = 'busqueda_contenido'
            $this->load->view('general_view', $view_data);
        }

        /*public function buscar()
        {
            if($this->input->post('submit_search'))
        }*/
    }
    /*
        Código para empotrar el buscador en una vista

        <div id="content"><?php $this->load->view($content) ?></div>
    */
?>

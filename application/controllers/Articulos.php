<?php
    error_reporting (E_ALL ^E_DEPRECATED);

    class Articulos extends CI_Controller
    {
        public function _construct()
        {
            parent::_construct();
        }

        public function index()
        {
            $datos = array('titulo_web'=>'Articulos',
                'articulos' => $this->Articulos_model->get_articulos());
            $this->load->view('articulos_view', $datos);
        }
    }
?>

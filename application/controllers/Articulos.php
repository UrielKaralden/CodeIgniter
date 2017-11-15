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
            $this->load->view('articulos_view');
        }
    }
?>

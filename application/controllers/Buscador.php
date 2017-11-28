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
            $this->load->view('buscador_view');
        }
    }
?>

<?php
    error_reporting (E_ALL ^E_DEPRECATED);

    class Un_articulo extends CI_Controller
    {
        public function _construct()
        {
            parent::_construct();
        }

        public function index(){}

        function arti($titulo, $descripcion, $cuerpo)
        {
            $data = array(
                'titulo'=>'Articulo',
                'titulo_articulo'=> $titulo,
                'descripcion'=> $descripcion,
                'cuerpo'=>$cuerpo,
            );

            $this->load->view('un_articulo_view', $data);
        }
    }
?>

<?php

    class Articulos_model extends CI_Model
    {
        public function _construct()
        {
            parent::_construct();
        }

        public function get_articulos()
        {
            $get_articulos_query = "Select * from articulos;";
            $consulta = $this->db->query($get_articulos_query);
            return $consulta->result();
        }

        public function add_articulo()
        {
            $add_articulo_query = 'Insert into articulos (id, titulo, descripcion, cuerpo)
                values (null,"'.$this->input->post('titulo').'","'.$this->input->post('descripcion').'","'.$this->input->post('cuerpo').'")';
            $this->db->query($add_articulo_query);
        }
    }
?>

<?php
class Buscador_model extends CI_Model
{
    public function _construct()
    {
        parent::_construct();
    }

    public function get_search()
    {
        $match = $this->input->post(‘search’);
        $this->db->like(‘titulo’,$match);
        $this->db->or_like(‘usuario’,$match);
        $this->db->or_like(‘url_video’,$match);
        $query = $this->db->get(‘id’);
        return $query->result();
    }
}
?>

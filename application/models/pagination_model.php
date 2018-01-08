<?php
class pagination_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch books
    function get_videos($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from videos where titulo like '%$st%'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_videos_count($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from videos where titulo like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    function get_prueba($busqueda)
    {
        echo $busqueda;

    }
}
?>

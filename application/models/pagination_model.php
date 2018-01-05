<?php
class pagination_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch books
    function get_videos($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "Select * from videos where titulo like '%$st%' or usuario like '%$st%' or Fecha like '%$st%'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_videos_count($st = NULL)
    {
        if ($st == "NIL") $sql = "Select * from videos order by Fecha desc'";
        else $sql = "Select * from videos where titulo like '%$st%' or usuario like '%$st%' or Fecha like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
?>

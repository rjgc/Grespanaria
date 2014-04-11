<?php
class Grespanaria_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function get_noticias(){
        $query = $this->db->query("select * from noticias");

        $data = $query->result_array();
        return $data;
    }

}
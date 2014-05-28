<?php
class grespanaria_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function get_noticias(){
        $query = $this->db->query("select * from noticias order by data_news desc limit 12");

        $data = $query->result_array();
        return $data;
    }

    public function get_noticia($id){
        $query = $this->db->query("select * from noticias where id_noticia=$id");

        $data = $query->result_array();
        return $data;
    }

    public function get_noticias_destaque(){
        $query = $this->db->query("select * from noticias order by data_news desc limit 3");

        $data = $query->result_array();;
        return $data;
    }

    public function get_apresentacoes(){
        $query = $this->db->query("select * from apresentacoes");

        $data = $query->result_array();
        return $data;
    }

    public function get_certificados(){
        $query = $this->db->query("select * from certificados");

        $data = $query->result_array();
        return $data;
    }

    public function get_certificados_tipos(){
        $query = $this->db->query("select * from certificados_tipos");

        $data = $query->result_array();
        return $data;
    }

    public function get_page_videos(){
        $query = $this->db->query("select url from page_videos");

        $data = $query->result_array();
        return $data;
    }

    public function get_fotos(){
        $query = $this->db->query("select * from media_photo");

        $data = $query->result_array();
        return $data;
    }

    public function get_fotos_tipo(){
        $query = $this->db->query("select * from media_photo_tipos");

        $data = $query->result_array();
        return $data;
    }

    public function get_videos(){
        $query = $this->db->query("select * from media_video");

        $data = $query->result_array();
        return $data;
    }

    public function get_page($id){
        $query = $this->db->query("select * from paginas where id_pagina=$id");

        $data = $query->result_array();
        return $data;
    }

}
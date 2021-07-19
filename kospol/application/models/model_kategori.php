<?php

class Model_kategori extends CI_Model {

    public function data_kos(){
        return $this->db->get_where('tb_barang', array('kategori' => 'kos'));
    }

    public function data_kontrakan(){
        return $this->db->get_where('tb_barang', array('kategori' => 'kontrakan'));
    }
}
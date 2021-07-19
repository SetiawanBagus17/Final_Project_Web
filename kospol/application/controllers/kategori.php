<?php

class Kategori extends CI_Controller {
    public function elektronik(){
        $data['elektronik'] = $this->model_kategori->data_kos()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_pria(){
        $data['pakaian_pria'] = $this->model_kategori->data_kontrakan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }
}
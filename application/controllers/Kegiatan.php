<?php

class Kegiatan extends CI_Controller{
    public function index()
    {

    $this->load->view('templates/header');
    $this->load->view('kegiatan/index');
    $this->load->view('templates/footer');

    }
}
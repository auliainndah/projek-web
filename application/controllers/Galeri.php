<?php

class Galeri extends CI_Controller{
    public function index()
    {

    $this->load->view('templates/header');
    $this->load->view('galeri/index');
    $this->load->view('templates/footer');

    }
}
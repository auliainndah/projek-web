<?php

class Akademik extends CI_Controller{
    public function index()
    {

    $this->load->view('templates/header');
    $this->load->view('akademik/index');
    $this->load->view('templates/footer');

    }
}
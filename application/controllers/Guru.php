<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Materi_model');
}

    public function index()
    {
        $data['materi'] = $this->Materi_model->getallmateri();
        $this->load->view('guru/materi', $data);
    }
}
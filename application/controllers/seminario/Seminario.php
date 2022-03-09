<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelo_estudiante');
        date_default_timezone_set('America/La_Paz');
        $this->load->helper('funciones_helper');
        // $this->load->helper('download');
    }

    public function index()
    {
        redirect(site_url(Hasher::make(25)));
    }
}

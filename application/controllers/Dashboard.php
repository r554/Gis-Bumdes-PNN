<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Krite');
        // if (empty($_SESSION['nama'])) {
        //     redirect(site_url('Auth'));
        // }
    }

    public function index()
    {
        // $this->load->view('Template/header');
        $this->load->view('Home/index');
        // $this->load->view('Template/footer');
    }
}

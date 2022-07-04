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
        
		$this->load->model('m_master');
    }

    public function index()
    {
        $data['master'] = $this->m_master->get_all_data();
        // var_dump($data);
        // die;
        
        $data['provinsi'] = $this->m_master->getprovinsi();
        $data['brg'] = $this->m_master->getbrg();

        $this->load->view('Home/index',$data);
    }
    
    public function filter()
    {
        $brg=$this->input->post('id_brg');
		$provinsi=$this->input->post('id_provinsi');
		$bulan=$this->input->post('id_bulan');
		$tahun=$this->input->post('id_tahun');
        // var_dump($brg ,  $provinsi ,  $bulan , $tahun);
        // die;
		$data['data'] = $this->m_master->filter($brg,$provinsi,$bulan,$tahun);
        // var_dump($data);
        // die;
        $this->load->view('Home/filter',$data);
        
    }
}
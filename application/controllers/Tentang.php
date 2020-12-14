<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    //Halaman utama website-->tentang

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('My_Models');
        $this->load->model('Slider_Model');
        $this->load->library('session');
    }


    public function index()
    {
        $data = array(
            'title'   => 'Wisata - Desa Jagaraga - Tentang',
            'destinasi' => $this->My_Models->getDestinasi(),
            'tentang' => $this->My_Models->getTentang(),
            'slider' => $this->Slider_Model->getSlider(),
            'isi'     => 'tentang/list'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

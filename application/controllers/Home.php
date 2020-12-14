<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    //Halaman utama website-->homepage

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
            'title'   => 'Wisata - Desa Jagaraga',
            'destinasi' => $this->My_Models->getDestinasi(),
            'slider' => $this->Slider_Model->getSlider(),
            'isi'     => 'home/list'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

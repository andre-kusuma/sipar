<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //Halaman utama website-->homepage

    function __construct(){
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_login');
        $this->load->library('session');

    }


    public function index()
    {
        $data = array(  'title'   => 'Wisata - Desa Jagaraga',
                        'isi'     => 'home/list');

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

    //Halaman utama dasbor
    public function index()
    {
        // if(empty($this->session->userdata('login'))){
        //     redirect('login');
        // }

        $data = array(  
            'title'   => 'Dashboard',
            'isi'     => 'admin/dasbor/list',
            'card_title' => 'Dashboard',
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function __construct(){
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_login');
        $this->load->library('session');

        if($this->session->userdata('level')!="Admin"){
            redirect('login');
        }


    }

    // function __construct(){
    //     parent::__construct();

    //     if(empty($this->session->userdata('login'))){
    //         redirect('login');
    //     }

    //     $this->load->model();
    // }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    //Halaman Login
    public function index()
    {
        $data = array('title'   => 'Login Administrator');
        $this->load->view('login/list', $data, FALSE);
    }

    function __construct(){
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_login');
        $this->load->library('session');


    }

    function proses_login(){
        $user=$this->input->post('username');
        $pass=$this->input->post('password');

        $ceklogin= $this->M_login->login($user,$pass);

        if($ceklogin){
            foreach($ceklogin as $row);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('level', $row->level);

            if($this->session->userdata('level')=="Admin"){
                redirect('admin/dasbor');
            }elseif($this->session->userdata('level')=="Member"){
                redirect('home');
            }

        }else{
            $data['pesan']="Username atau Password tidak sesuai.";
            $this->load->view('login/list',$data);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    //Halaman utama Pengguna

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_Models');
        $this->load->helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Administrator',
            'isi' => 'admin/pengguna',
            'card_title' => 'Data Pengguna',
            'pengguna' => $this->db->get('user')->result_array()

        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);

    }

    public function tambah_pengguna()
    {
        
        $data = array(
            'title' => 'Data Pengguna',
            'isi' => 'admin/tambah_pengguna',
            'card_title' => 'Data Pengguna',
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);

    }

    public function simpan_pengguna()
    {
        $data= [
            'username'=> $this->input->post('username'),
            'password'=> $this->input->post('password'),
            'alamat'=> $this->input->post('alamat'),
            'email'=> $this->input->post('email'),
            'level'=> $this->input->post('level'),
        ];  

        $this->session->set_flashdata('pengguna','Data Berhasil Ditambahkan.');
        $this->db->insert('user',$data);
        redirect('admin/Pengguna');
    }

    public function hapus_pengguna($id)
    {
        $this->My_Models->delete_pengguna($id);
        $this->session->set_flashdata('pengguna','Berhasil Dihapus.');
        redirect('admin/pengguna');
    }
}
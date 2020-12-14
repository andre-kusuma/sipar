<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_Admin extends CI_Controller
{

    //Halaman utama tentang

    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_Models');
        $this->load->model('Tentang_Admin_Model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Administrator',
            'isi' => 'admin/tentang/list',
            'card_title' => 'Tentang',
            'tentang' => $this->db->get('tb_tentang')->result_array(),


        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function tambah_tentang()
    {

        $data = array(
            'title' => 'Data Tentang',
            'isi' => 'admin/tentang/tambah_tentang',
            'card_title' => 'Data Tentang',
            'tentang'  => $this->db->get('tb_tentang')->result_array()
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function simpan_tentang()
    {
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['upload_path'] = realpath('./assets/foto/');
            $config['allowed_types'] = 'gif|img|png|jpg|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
        }
        $data = [
            // 'user' => $this->db->get_where('user',['username' => $this->session->userdata('username');]),
            'id_tentang' => $this->input->post('id_tentang'),
            'judul_tentang' => $this->input->post('judul_tentang'),
            'keterangan' => $this->input->post('keterangan'),

        ];

        $this->session->set_flashdata('tentang', 'Data Berhasil Ditambahkan.');
        $this->db->insert('tb_tentang', $data);
        redirect('admin/tentang_admin');
    }


    public function edit_tentang($id)
    {
        $data = array(
            'title' => 'Edit Data Tentang',
            'isi' => 'admin/tentang/edit_tentang',
            'card_title' => 'Edit Data Tentang',
            'tentang'  => $this->db->get('tb_tentang')->result_array()
        );
        $data['tentang'] = $this->Tentang_Admin_Model->show_tentang($id);
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function do_edit_tentang()
    {
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            $this->Tentang_Admin_Model->edit_tentang();
            $this->session->set_flashdata('tentang', 'Data Berhasil Diubah.');
            redirect('admin/tentang_admin');
        } else {
            $config['allowed_types'] = "img|png|jpg|jpeg|gif";
            $config['upload_path'] = "./assets/foto/";
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "gagal";
            } else {
                $this->Tentang_Admin_Model->edit_tentang2();
                $this->session->set_flashdata('tentang', 'Data Berhasil Diubah.');
                redirect('admin/tentang_admin');
            }
        }
    }

    public function hapus_tentang($id)
    {
        $this->Tentang_Admin_Model->delete_tentang($id);
        $this->session->set_flashdata('tentang', 'Berhasil Dihapus.');
        redirect('admin/tentang_admin');
    }
}

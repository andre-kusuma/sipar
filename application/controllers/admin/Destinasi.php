<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {

    //Halaman utama Destinasi

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
            'isi' => 'admin/destinasi',
            'card_title' => 'Data Destinasi',
            'destinasi' => $this->db->join('tb_kategori','tb_kategori.id_kategori=tb_destinasi.id_kategori')->get('tb_destinasi')->result_array(),
            

        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);

    }

    public function tambah_destinasi()
    {
        
        $data = array(
            'title' => 'Data Destinasi',
            'isi' => 'admin/tambah_destinasi',
            'card_title' => 'Data Destinasi',
            'kategori'  => $this->db->get('tb_kategori')->result_array()
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function simpan_destinasi()
    {
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['upload_path'] = realpath('./assets/foto/');
            $config['allowed_types'] = 'gif|img|png|jpg|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
        }
        $data= [
            // 'user' => $this->db->get_where('user',['username' => $this->session->userdata('username');]),
            'id_kategori'=> $this->input->post('id_kategori'),
            'nama_destinasi'=> $this->input->post('nama_destinasi'),
            'keterangan'=> $this->input->post('keterangan'),
            'alamat'=> $this->input->post('alamat'),
            'tarif'=> $this->input->post('tarif'),
            'foto' => $_FILES['foto']['name']
        ];  

        $this->session->set_flashdata('destinasi','Data Berhasil Ditambahkan.');
        $this->db->insert('tb_destinasi',$data);
        redirect('admin/Destinasi');
    }

    public function edit_destinasi($id)
    {
        $data = array(
            'title' => 'Edit Data Destinasi',
            'isi' => 'admin/edit_destinasi',
            'card_title' => 'Edit Data Destinasi',
            'kategori'  => $this->db->get('tb_kategori')->result_array()
        );
        $data['destinasi'] = $this->My_Models->show_destinasi($id);
        $this->load->view('admin/layout/wrapper', $data, FALSE);

       
    }

    public function do_edit_destinasi()
    {
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            $this->My_Models->edit_destinasi();
            $this->session->set_flashdata('destinasi','Data Berhasil Diubah.');
            redirect('admin/destinasi');
        }else {
            $config['allowed_types'] = "img|png|jpg|jpeg|gif";
            $config['upload_path'] = "./assets/foto/";
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto')) {
                echo "gagal";
            }else {
                $this->My_Models->edit_destinasi2();
                $this->session->set_flashdata('destinasi','Data Berhasil Diubah.');
                redirect('admin/destinasi');
            }
        }
    }

    public function hapus_destinasi($id)
    {
        $this->My_Models->delete_destinasi($id);
        $this->session->set_flashdata('destinasi','Berhasil Dihapus.');
        redirect('admin/destinasi');
    }

}
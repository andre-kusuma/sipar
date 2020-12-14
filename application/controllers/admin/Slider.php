<?php
defined('BASEPATH') or exit('No direct script access allowed');

class slider extends CI_Controller
{

    //Halaman utama Slider

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Slider_Model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Slider',
            'isi' => 'admin/slider/list',
            'card_title' => 'Slider',
            'slider' => $this->db->get('tb_slider')->result_array()


        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function tambah_slider()
    {

        $data = array(
            'title' => 'Slider',
            'isi' => 'admin/slider/tambah_slider',
            'card_title' => 'Slider',
            'slider'  => $this->db->get('tb_slider')->result_array()
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function simpan_slider()
    {
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['upload_path'] = realpath('./assets/slider/');
            $config['allowed_types'] = 'gif|img|png|jpg|jpeg';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
        }
        $data = [
            // 'user' => $this->db->get_where('user',['username' => $this->session->userdata('username');]),
            'id_slider' => $this->input->post('id_slider'),
            'foto' => $_FILES['foto']['name']
        ];

        $this->session->set_flashdata('slider', 'Data Berhasil Ditambahkan.');
        $this->db->insert('tb_slider', $data);
        redirect('admin/slider');
    }

    public function edit_slider($id)
    {
        $data = array(
            'title' => 'Edit Slider',
            'isi' => 'admin/slider/edit_slider',
            'card_title' => 'Edit Slider',
            'slider'  => $this->db->get('tb_slider')->result_array()
        );
        $data['slider'] = $this->Slider_Model->show_slider($id);
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function do_edit_slider()
    {
        $gambar = $_FILES['foto']['name'];
        if ($gambar == "") {
            $this->Slider_Model->edit_slider();
            $this->session->set_flashdata('slider', 'Data Berhasil Diubah.');
            redirect('admin/slider');
        } else {
            $config['allowed_types'] = "img|png|jpg|jpeg|gif";
            $config['upload_path'] = "./assets/slider/";
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "gagal";
            } else {
                $this->Slider_Model->edit_slider2();
                $this->session->set_flashdata('slider', 'Data Berhasil Diubah.');
                redirect('admin/slider');
            }
        }
    }

    public function hapus_slider($id)
    {
        $this->Slider_Model->delete_slider($id);
        $this->session->set_flashdata('slider', 'Berhasil Dihapus.');
        redirect('admin/slider');
    }
}

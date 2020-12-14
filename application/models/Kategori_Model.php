<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Kategori_Model extends CI_Model
{

    //halaman dasbor
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing all kategori
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    //detail kategori
    public function detail($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->where('id_kategori', $id_kategori);
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    //login kategori
    public function login($kategoriname, $password)
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->where(array(
            'kategoriname' => $kategoriname,
            'password'   => SHA1($password)
        ));
        $this->db->order_by('id_kategori', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    //tambah kategori
    public function tambah($data)
    {
        $this->db->insert('tb_kategori', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('tb_kategori', $data);
    }

    //delete kategori
    public function delete($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->delete('tb_kategori', $data);
    }
}

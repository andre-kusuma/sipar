<?php

class My_Models extends CI_Model
{
    public function getDestinasi()
    {
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_destinasi.id_kategori');
        return $this->db->get('tb_destinasi')->result_array();
    }

    public function getTentang()
    {
        // $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_destinasi.id_kategori');
        return $this->db->get('tb_tentang')->result_array();
    }


    public function edit_destinasi()
    {
        $data = [
            "nama_destinasi" => $this->input->post("nama_destinasi"),
            "id_kategori" => $this->input->post("id_kategori"),
            "keterangan" => $this->input->post("keterangan"),
            "alamat" => $this->input->post("alamat"),
            "tarif" => $this->input->post("tarif")
        ];
        $this->db->where('id_destinasi', $this->input->post('id'));
        $this->db->update('tb_destinasi', $data);
    }

    public function edit_destinasi2()
    {
        $data = [
            "nama_destinasi" => $this->input->post("nama_destinasi"),
            "keterangan" => $this->input->post("keterangan"),
            "alamat" => $this->input->post("alamat"),
            "tarif" => $this->input->post("tarif"),
            "foto" => $this->upload->data("file_name")

        ];
        $this->db->where('id_destinasi', $this->input->post('id'));
        $this->db->update('tb_destinasi', $data);
    }

    public function show_destinasi($id)
    {
        return $this->db->get_where('tb_destinasi', array(
            "id_destinasi" => $id
        ))->row_array();
    }

    public function delete_destinasi($id)
    {
        $this->db->where('id_destinasi', $id);
        return $this->db->delete('tb_destinasi');
    }

    public function delete_pengguna($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}

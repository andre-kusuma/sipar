<?php

class Tentang_Admin_Model extends CI_Model
{

    public function getTentang()
    {
        // $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_tentang.id_kategori');
        return $this->db->get('tb_tentang')->result_array();
    }


    public function edit_tentang()
    {
        $data = [
            "judul_tentang" => $this->input->post("judul_tentang"),
            "keterangan" => $this->input->post("keterangan")

        ];
        $this->db->where('id_tentang', $this->input->post('id'));
        $this->db->update('tb_tentang', $data);
    }

    public function edit_tentang2()
    {
        $data = [
            "judul_tentang" => $this->input->post("judul_tentang"),
            "keterangan" => $this->input->post("keterangan"),
            "foto" => $this->upload->data("file_name")

        ];
        $this->db->where('id_tentang', $this->input->post('id'));
        $this->db->update('tb_tentang', $data);
    }

    public function show_tentang($id)
    {
        return $this->db->get_where('tb_tentang', array(
            "id_tentang" => $id
        ))->row_array();
    }

    public function delete_tentang($id)
    {
        $this->db->where('id_tentang', $id);
        return $this->db->delete('tb_tentang');
    }

    public function delete_pengguna($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}

<?php

class My_Models extends CI_Model
{
    public function edit_destinasi()
    {
        $data = [
            "nama_destinasi" => $this->input->post("nama_destinasi"),
            "alamat" => $this->input->post("alamat"),
            "tarif" => $this->input->post("tarif")
        ];
        $this->db->where('id_destinasi',$this->input->post('id'));
        $this->db->update('tb_destinasi',$data);
    }

    public function edit_destinasi2()
    {
        $data = [
            "nama_destinasi" => $this->input->post("nama_destinasi"),
            "alamat" => $this->input->post("alamat"),
            "tarif" => $this->input->post("tarif"),
            "foto" => $this->upload->data("file_name")

        ];
        $this->db->where('id_destinasi',$this->input->post('id'));
        $this->db->update('tb_destinasi',$data);
    }

    public function show_destinasi($id)
    {
        return $this->db->get_where('tb_destinasi',array(
            "id_destinasi" => $id
        ))->row_array();
    }

    public function delete_destinasi($id)
    {
        $this->db->where('id_destinasi',$id);
        return $this->db->delete('tb_destinasi');
    }

    public function delete_pengguna($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('user');
    }
}
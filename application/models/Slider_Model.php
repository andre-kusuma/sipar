<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Slider_Model extends CI_Model
{
    public function getSlider()
    {
        return $this->db->get('tb_slider')->result_array();
    }

    public function edit_slider()
    {
        $data = [];
        $this->db->where('id_slider', $this->input->post('id'));
        $this->db->update('tb_slider', $data);
    }

    public function edit_slider2()
    {
        $data = [

            "foto" => $this->upload->data("file_name")

        ];
        $this->db->where('id_slider', $this->input->post('id'));
        $this->db->update('tb_slider', $data);
    }

    public function show_slider($id)
    {
        return $this->db->get_where('tb_slider', array(
            "id_slider" => $id
        ))->row_array();
    }

    public function delete_slider($id)
    {
        $this->db->where('id_slider', $id);
        return $this->db->delete('tb_slider');
    }
}

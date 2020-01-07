<?php
class Ruang_model extends CI_Model{


    public function show()
    {
        # code...
        $query = $this->db->get('ruang');
        return $query->result();
    }

    public function add()
    {
        # code...
        $ruang = $this->input->post('ruang');
        $this->db->set('ruang', $ruang);
        $query = $this->db->insert('ruang');
        return $query;
    }  

    public function del()
    {
        # code...
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $query = $this->db->delete('ruang');
        return $query;
    }  

    public function edit()
    {
        # code...
        $id = $this->input->post('id');
        $ruang = $this->input->post('ruang');
        $this->db->where('id', $id);    
        $this->db->set('ruang', $ruang);
        $query = $this->db->update('ruang');
        return $query;
    }
}

?>
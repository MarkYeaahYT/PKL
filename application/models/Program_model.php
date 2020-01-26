<?php
class Program_model extends CI_Model{

    public function data_xhr()
    {
        # code...
        $query = $this->db->get('program');
        return $query->result();
    }

    public function data_select_xhr()
    {
        # code...
        $this->db->where('program', '1 Tahun');
        $thn = $this->db->get('program');
        $this->db->where('program', 'Intensif');
        $itf = $this->db->get('program');
        $this->db->where('program', 'Profesi 6 Bulan');
        $bln = $this->db->get('program');

        $data = array(
            'thn' => $thn->result(),
            'bln' => $bln->result(),
            'itf' => $itf->result()
        );
        return $data;
    }

    public function add()
    {
        # code...
        $jurusan = $this->input->post('jurusan');
        $program = $this->input->post('program');
        $this->db->set('jurusan', $jurusan);
        $this->db->set('program', $program);
        $query = $this->db->insert('program');
        return $query;
    }

    public function edit()
    {
        # code...
        $id = $this->input->post('id');
        $jurusan = $this->input->post('jurusan');
        $program = $this->input->post('program');

        $this->db->set('jurusan', $jurusan);
        $this->db->set('program', $program);
        $this->db->where('id', $id);
        $query = $this->db->update('program');
        return $query;
    }

    public function del()
    {
        # code...
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $query = $this->db->delete('program');
        return $query;
    }  
}
?>
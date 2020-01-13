<?php
class Jual_model extends CI_Model{

    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function save()
    {
        # code...
        $no_invetaris = $this->input->post('no_inventaris');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $tanggal_jual = $this->input->post('tanggaljual');
        $this->db->set('no_inventaris', $no_invetaris);
        $this->db->set('tanggal_jual', $tanggal_jual);
        $this->db->set('harga', $harga);
        $this->db->set('status', $status);
        $query = $this->db->insert('jual');
        return $query;
    }

    public function show()
    {
        /**
         * show data for JS process
         */
        # code...
        $query = $this->db->get('jual');
        return $query->result();
    }

    public function total_jual()
    {
        # code...
        $query = $this->db->get('jual');
        return $query->num_rows();
    }
}
?>
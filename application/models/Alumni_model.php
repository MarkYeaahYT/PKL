<?php
class Alumni_model extends CI_Model{

    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function data_xhr()
    {
        # code...
        $query = $this->db->get('alumni');
        return $query->result();
    }

    public function add()
    {
        # code...
        
    }

    public function del()
    {
        # code...
    }

    public function edit()
    {
        # code...
    }
}

?>
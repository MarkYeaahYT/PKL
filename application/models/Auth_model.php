<?php
class Auth_model extends CI_Model{

    public function auth()
    {
        # code...
        $user = trim($this->input->post("username", true));
        $pass = trim($this->input->post("password", true));

        $this->db->select('role');
        $this->db->select('username');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);

        $query = $this->db->get("user_anggaran");
        return $query->result();
    }
}
?>
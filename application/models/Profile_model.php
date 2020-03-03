<?php
class Profile_model extends CI_Model{

    public function add()
    {
        # code...
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $role = $this->input->post("role");
        $this->db->set("username", $username);
        $this->db->set("password", $password);
        $this->db->set("role", $role);
        return $this->db->insert("user_anggaran");
    }

    public function del()
    {
        # code...
        $id = $this->input->post("id");
        $this->db->where("id", $id);
        return $this->db->delete("user_anggaran");
    }

    public function edit()
    {
        # code...
        $id = $this->input->post("id");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $role = $this->input->post("role");
        $this->db->set("username", $username);
        $this->db->set("password", $password);
        $this->db->set("role", $role);
        $this->db->where("id", $id);
        return $this->db->update("user_anggaran");
    }

    public function show_xhr()
    {
        # code...
        return $this->db->get("user_anggaran")->result();
    }
}
?>
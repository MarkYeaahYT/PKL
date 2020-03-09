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

    public function upload()
    {
        # code..
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 0; // 0 is not set

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('file')){
            $data = array('error' => $this->upload->display_errors());
            return $data;
        }else{
            $ishome = $this->input->post("ishome");
            if($ishome){
                $data = $this->upload->data();

                $this->db->set("logo", $data['file_name']);
                $this->db->update("profilealf");
                chmod($data['full_path'], "644");
                return $data['file_name'];
                // return $data;
            }else{
                $data = $this->upload->data();
                $id = $this->input->post("id");
                // 
                $this->db->set("logo", $data['file_name']);
                $this->db->where("id", $id);
                $query = $this->db->update("profile");
                chmod($data['full_path'], "644");
                return $data['file_name'];
            }
        }

    }

    public function save_profile()
    {
        # code...
        $ishome = $this->input->post("ishome");
        if($ishome){
            $id = $this->input->post("id");
            $title = $this->input->post("title");
            $alamat = $this->input->post("alamat");
            $tlp = $this->input->post("tlp");
            $this->db->set("title", $title);
            $this->db->set("alamat", $alamat);
            $this->db->set("tlp", $tlp);
            $this->db->where("id", $id);
            return $this->db->update("profilealf");
        }else{
            $iicode = $this->input->post("iicode");
            if(isset($iicode)){
                $appname = $this->input->post("appname");
                $id = $this->input->post("id");
                $this->db->set("app", $appname);
                $this->db->where("id", $id);
                $this->db->update("profile");

                $this->db->set("code", $iicode);
                $this->db->update("inventory_code");
                return $appname;
            }else{
                $appname = $this->input->post("appname");
                $id = $this->input->post("id");
                $this->db->set("app", $appname);
                $this->db->where("id", $id);
                $this->db->update("profile");
                return $appname;

            }
        }
    }

    public function dataprofile()
    {
        # code...
        $ishome = $this->input->get("ishome");
        if($ishome){
            return $this->db->get("profilealf")->result();
        }else{
            return $this->db->get("profile")->result();
        }
    }

    public function geticode()
    {
        # code...
        return $this->db->get("inventory_code")->result();
    }

}
?>
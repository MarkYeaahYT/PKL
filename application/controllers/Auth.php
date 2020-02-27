<?php
class Auth extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model("auth_model");
    }

    public function index()
    {
        # code...
    }

    public function auth()
    {
        # code...
        $data = $this->auth_model->auth();
        if(isset($data[0]->username)){
            $ss = array(
                "user" => $data[0]->username,
                "role" => $data[0]->role
            );
            $this->session->set_userdata($ss);

            $cookie = array(
                "name" => "currentRole",
                "value" => $data[0]->role,
                "path" => "/",
                "expire" => "43200"
            );

            $this->input->set_cookie($cookie);

            echo json_encode($data);
        }else{
            $data = array(
                'status' => 'fail'
            );
            echo json_encode($data);
        }
    }

    public function shutdown()
    {
        # code...
        unset(
            $_SESSION['user'],
            $_SESSION['role']
        );
        $data = array(
            'status' => 'YES'
        );
        echo json_encode($data);
    }
}
?>
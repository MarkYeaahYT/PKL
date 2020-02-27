<?php 
class Anggaran extends CI_Controller{


    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('anggaran_model');
        $this->load->library('session');

    }

    public function index()
    {
        /**
         * Load Dashboard consider by role in session
         * 1 admin
         * 2 user
         */
        # code...
        if($this->session->has_userdata('user')){
            $role = $_SESSION['role'];
            if($role == "1"){
                $this->load->view('anggaran/adminhome');
            }else if($role == "2"){
                $this->load->view('anggaran/userhome');
            }
        }else{
            $this->load->view('errors/forbidden');
        }
    }

    public function auth()
    {
        /**
         * 1 admin
         * 2 user
         * 
         * bkk
         * umum
         */
        # code...
        $data = $this->anggaran_model->auth();
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

    public function data()
    {
        /**
         * Load Dashboard consider by role in session
         * 1 admin
         * 2 user
         */
        # code...
        if($this->session->has_userdata('user')){
            $role = $_SESSION['role'];
            if($role == "1"){
                $this->load->view('anggaran/admindata');
            }else if($role == "2"){
                $this->load->view('anggaran/userdata');
            }
        }else{
            $this->load->view('errors/forbidden');
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

    public function save_dana()
    {
        # code...
        $data = $this->anggaran_model->save_dana();
        echo json_encode($data);
    }
    
    public function show_dana()
    {
        # code...
        $data = $this->anggaran_model->show_dana();
        echo json_encode($data);
    }

    public function save_item()
    {
        # code...
        $data = $this->anggaran_model->save_item();
        echo json_encode($data);
    }

    public function show_item()
    {
        # code...
        $data = $this->anggaran_model->show_item();
        echo json_encode($data);
    }

    public function save_sisa()
    {
        # code...
        $data = $this->anggaran_model->save_sisa();
        echo json_encode($data);
    }

    public function set_status()
    {
        # code...
        $data = $this->anggaran_model->set_status();
        echo json_encode($data);

    }

    public function show_data()
    {
        # code...
        $data = $this->anggaran_model->show_data();
        echo json_encode($data);
    }

    public function filter_data()
    {
        # code...
        $data = $this->anggaran_model->filter_data();
        echo json_encode($data);
    }
}
?>
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
                $this->load->view('anggaran/user/home');
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
         */
        # code...
        $data = $this->anggaran_model->auth();
        if(isset($data[0]->username)){
            $ss = array(
                "user" => $data[0]->username,
                "role" => $data[0]->role
            );
            $this->session->set_userdata($ss);

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
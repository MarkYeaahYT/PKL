<?php
class Profile extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
        $this->load->model("profile_model");
    }

    public function index()
    {
        # code...
        if($this->session->has_userdata('user')){
            $role = $_SESSION['role'];
            if($role == "1"){
                $this->load->view("profile/profilerender");
            }else{
                $this->load->view('errors/forbidden');
            }
        }else{
            $this->load->view('errors/forbidden');
        }
    }
    
    public function manageuser()
    {
        # code...
        if($this->session->has_userdata('user')){
            $role = $_SESSION['role'];
            if($role == "1"){
                $this->load->view("profile/manageuserrender");
            }else{
                $this->load->view('errors/forbidden');
            }
        }else{
            $this->load->view('errors/forbidden');
        }
    }

    public function add()
    {
        # code...
        echo json_encode($this->profile_model->add());
    }

    public function del()
    {
        # code...
        echo json_encode($this->profile_model->del());
    }

    public function edit()
    {
        # code...
        echo json_encode($this->profile_model->edit());
    }

    public function show_xhr()
    {
        # code...
        echo json_encode($this->profile_model->show_xhr());
    }
    
    public function upload()
    {
        # code...
        echo json_encode($this->profile_model->upload());
    }

    public function save()
    {
        # code...
        echo json_encode($this->profile_model->save_profile());
    }

    public function dataprofile()
    {
        # code...
        echo json_encode($this->profile_model->dataprofile());
    }

    public function geticode()
    {
        # code...
        echo json_encode($this->profile_model->geticode());
    }
}
?>
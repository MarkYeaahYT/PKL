<?php
class Alumni extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('alumni_model');
    }

    public function index()
    {
        # code...
        $this->load->view('dashboard_alumni');
    }

    public function data()
    {
        # code...
        $this->load->view('data_alumni');
    }
    
    public function data_xhr()
    {
        # code...
        $data = $this->alumni_model->data_xhr();
        echo json_encode($data);
    }


    public function add()
    {
        # code...
        $data = $this->alumni_model->add();
        echo json_encode($data);
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
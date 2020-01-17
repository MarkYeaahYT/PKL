<?php
class Alumni extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        # code...
        $this->load->view('dashboard_alumni');
    }
    
    public function data_xhr()
    {
        # code...
    }

    public function data()
    {
        # code...
        $this->load->view('data_alumni');
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
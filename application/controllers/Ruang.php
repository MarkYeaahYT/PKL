<?php
class Ruang extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->model('ruang_model');
    }

    public function show_data()
    {
        # code...
        $data = $this->ruang_model->show();
        echo json_encode($data);
    }  

    public function add()
    {
        # code...
        $data = $this->ruang_model->add();
        echo json_encode($data);
    }  

    public function del()
    {
        # code...
        $data = $this->ruang_model->del();
        echo json_encode($data);
    }  
    
    public function edit()
    {
        # code...
        $data = $this->ruang_model->edit();
        echo json_encode($data);
    }  
}

?>
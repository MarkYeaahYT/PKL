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
        $data = $this->alumni_model->del();
        echo json_encode($data);
    }

    public function edit()
    {
        # code...
        $data = $this->alumni_model->edit();
        echo json_encode($data);
    }

    public function realtime()
    {
        # code...
        $data = array(
            'jswa' => $this->alumni_model->j_siswa(),
            'jsb' => $this->alumni_model->j_sbekerja(),
            'jbb' => $this->alumni_model->j_bbekerja(),
            'jthn' => $this->alumni_model->j_thn(),
            'jbln' => $this->alumni_model->j_bln(),
            'jitf' => $this->alumni_model->j_itf(),
        );
        echo json_encode($data);
    }
    
    public function filter()
    {
        # code...
        $this->load->view('filter');
    }

    public function filter_xhr()
    {
        # code...
        $param = $this->input->get('param');
        if($param == "sb"){
            $data = $this->alumni_model->filter("Sudah Bekerja" ,"");
            
        }else if($param == "bb"){
            $data = $this->alumni_model->filter("Mencari Pekerjaan" ,"");
            
        }else if($param == "thn"){
            $data = $this->alumni_model->filter("" ,"1 Tahun");
            
        }else if($param == "bln"){
            $data = $this->alumni_model->filter("" ,"Profesi 6 Bulan");
            
        }else if($param == "itf"){
            $data = $this->alumni_model->filter("" ,"Intensif");

        }
        echo json_encode($data);
    }
}

?>
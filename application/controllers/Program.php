<?php
class Program extends CI_Controller{
    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('program_model');
    }

    public function index()
    {
        # code...
        if($this->session->has_userdata('user')){
            $role = $_SESSION['role'];
            $data['user'] = $_SESSION['user'];
			if($role == "4" || $role == "1"){
                $this->load->view('program', $data);
			}else{
                $this->load->view('errors/forbidden');
			}
		}else{
			$this->load->view('errors/forbidden');
		}
    }

    public function data_xhr()
    {
        # code...
        $data = $this->program_model->data_xhr();
        echo json_encode($data);

    }

    public function data_select_xhr()
    {
        # code...
        $data = $this->program_model->data_select_xhr();
        echo json_encode($data);

    }

    public function add()
    {
        # code...
        $data = $this->program_model->add();
        echo json_encode($data);
    }
    
    public function edit()
    {
        # code...
        $data = $this->program_model->edit();
        echo json_encode($data);
    }
    
    public function del()
    {
        # code...
        $data = $this->program_model->del();
        echo json_encode($data);
    }
}
?>
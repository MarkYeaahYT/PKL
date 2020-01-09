<?php
class Export extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->model('export_model');
    }

    public function pdf()
    {
        # code...
        $this->export_model->pdf();
    }

    public function xlsx()
    {
        # code...
    }
}
?>
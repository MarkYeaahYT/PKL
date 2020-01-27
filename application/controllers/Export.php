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
        $data['data'] = $this->export_model->xlsx();
        $this->load->view('barang/export', $data);
    }

    public function pdf_alumni()
    {
        # code...
        $this->export_model->pdf_alumni();
    }

    public function xlsx_alumni()
    {
        # code...
        $data['data'] = $this->export_model->xlsx_alumni();
        $this->load->view('alumni/export', $data);
    }
}
?>
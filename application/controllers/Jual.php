<?php
class Jual extends CI_Controller{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->model('jual_model');
    }

    public function save()
    {
        # code...
        $data = $this->jual_model->save();
        echo json_encode($data);
    }

    public function show()
    {
        /**
         * show data for JS process
         */
        # code...
        $data = $this->jual_model->show();
        echo json_encode($data);

    }

}
?>
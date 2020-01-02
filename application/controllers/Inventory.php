<?php 

class Inventory extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('inventory_model');
	}
	
	public function show_data()
	{
		/**
		 * show data in tables process with jquery
		 */
		$data = $this->inventory_model->show();
		echo json_encode($data);

	}

    public function data()
	{
		$this->load->view('data');
	}
	
	public function import()
	{
		# code...
		$this->load->view('import');
	}
    
    public function add()
	{
		# code...
		$data = $this->inventory_model->tambah();
		echo json_encode($data);
	}

    public function del()
	{
		# code...
		$data = $this->inventory_model->hapus();
		echo json_encode($data);
	}

    public function update()
	{
		# code...
		$data = $this->inventory_model->update();
		echo json_encode($data);
	}

}

?>
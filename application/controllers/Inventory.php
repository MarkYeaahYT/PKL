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
	
	public function ruang()
	{
		# code...
		$this->load->view('ruang');
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

	public function incNO()
	{
		# code...
		$res = $this->inventory_model->incrementNO();
		if(empty($res)){
			echo json_encode("0000");
		}else{
			$no = $res[0]->no_inventaris;
			$no = explode("/", $no);
			echo json_encode($no[5]);
			
		}
	}

	public function suggestion()
    {
		/**
         * This suggestion used for when we input same
         * name so we can suggest and auto fill with
         * same information
		 * 
         * Efficient YES
         */
		# code...
		$data = $this->inventory_model->suggestion();
		echo json_encode($data);
    }

}

?>
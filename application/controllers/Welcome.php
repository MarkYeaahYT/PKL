<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('inventory_model');
		$this->load->model('jual_model');
	}

	public function index()
	{
		$data['jum_rusak'] = $this->inventory_model->check_jum_rusak();
		$data['jum_normal'] = $this->inventory_model->check_jum_normal();
		$data['jumlah_barang'] = $this->inventory_model->jumlah_barang();
		$data['total_jual'] = $this->jual_model->total_jual();
		$this->load->view('dashboard', $data);
	}

	public function rusak()
	{
		# code...
		$this->load->view('rusak');
	}

	public function rusak_data()
	{
		# code...
		$data = $this->inventory_model->check_rusak();
		echo json_encode($data);
	}

	public function terjual()
	{
		# code...
		$this->load->view('terjual');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('inventory_model');
	}

	public function index()
	{
		$data['jum_rusak'] = $this->inventory_model->check_jum_rusak();
		$data['jum_normal'] = $this->inventory_model->check_jum_normal();
		$data['jumlah_barang'] = $this->inventory_model->jumlah_barang();
		$this->load->view('dashboard', $data);
	}

	public function rusak()
	{
		# code...
		$data['res'] = $this->inventory_model->check_rusak();
		$this->load->view('rusak', $data);
	}

}

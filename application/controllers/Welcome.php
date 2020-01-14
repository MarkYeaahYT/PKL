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
		$this->load->view('home');
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard');
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

	public function realtime()
	{
		# code...
		$mydata = array(
			'jnormal' => $this->inventory_model->check_jum_normal(),
			'jrusak' => $this->inventory_model->check_jum_rusak(),
			'jbarang' => $this->inventory_model->jumlah_barang(),
			'tjual' => $this->jual_model->total_jual(),
		);
		echo json_encode($mydata);
	}

}

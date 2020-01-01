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
		$data['jumlah_merk'] = $this->inventory_model->check_jum_merk();
		$this->load->view('dashboard', $data);
	}

	public function rusak()
	{
		# code...
		$data['res'] = $this->inventory_model->check_rusak();
		$this->load->view('rusak', $data);
	}

	public function jmerk()
	{
		# code...
		$data['res'] = $this->inventory_model->jumlah_merk();
		$this->load->view('jmerk', $data);
	}

	public function gbmerk()
	{
		
		# code...
		$data['res'] = $this->inventory_model->show_by_merk();
		$data['merk'] = $this->input->get('merk', true);
		$this->load->view('gbmerk', $data);
	}
	
}

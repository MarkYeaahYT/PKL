<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('inventory_model');
		$this->load->model('jual_model');
        $this->load->library('session');

	}

	public function index()
	{
		if($this->session->has_userdata('user')){
			$data['user'] = $_SESSION['user'];
			$this->load->view('home', $data);
		}else{
			$this->load->view("auth");
		}

	}
	
	public function dashboard()
	{
		if($this->session->has_userdata('user')){
			$role = $_SESSION['role'];
			$data['user'] = $_SESSION['user'];
			if($role == "3" || $role == "1"){
				$this->load->view('dashboard', $data);
			}else{
                $this->load->view('errors/forbidden');
			}
		}else{
			$this->load->view('errors/forbidden');
		}
	}

	public function rusak()
	{
		# code...
		if($this->session->has_userdata('user')){
			$role = $_SESSION['role'];
			$data['user'] = $_SESSION['user'];
			if($role == "3" || $role == "1"){
				$this->load->view('rusak', $data);
			}else{
                $this->load->view('errors/forbidden');
			}
		}else{
			$this->load->view('errors/forbidden');
		}
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
		if($this->session->has_userdata('user')){
			$role = $_SESSION['role'];
			$data['user'] = $_SESSION['user'];
			if($role == "3" || $role == "1"){
				$this->load->view('terjual', $data);
			}else{
                $this->load->view('errors/forbidden');
			}
		}else{
			$this->load->view('errors/forbidden');
		}
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

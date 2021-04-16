<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['pkh'] = $this->dataHandle->other_query("SELECT total, created_at from tb_data where jenis = 'PKH' ORDER BY id DESC LIMIT 1")->row();
		$data['bpnt'] = $this->dataHandle->other_query("SELECT total, created_at from tb_data where jenis = 'BPNT' ORDER BY id DESC LIMIT 1")->row();
		$data['lksa'] = $this->dataHandle->other_query("SELECT total, created_at from tb_data where jenis = 'LKSA' ORDER BY id DESC LIMIT 1")->row();
		$data['pbi'] = $this->dataHandle->other_query("SELECT total, created_at from tb_data where jenis = 'PBI' ORDER BY id DESC LIMIT 1")->row();
		$data['dtks'] = $this->dataHandle->other_query("SELECT total, created_at from tb_data where jenis = 'DTKS' ORDER BY id DESC LIMIT 1")->row();

		$d_jenis = "['PKH', 'BPNT', 'LKSA', 'PBI', 'DTKS']";

		$d_total = "[" . $data['pkh']->total . "," . $data['bpnt']->total . "," . $data['lksa']->total . "," . $data['pbi']->total . "," . $data['dtks']->total . "]";

		$data['jenis'] = $d_jenis;
		$data['total'] = $d_total;
		$this->load->view('dashboard', $data);
	}
}

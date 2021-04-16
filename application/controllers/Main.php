<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
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
		$data['num_rows'] = $this->db->get('tb_import')->num_rows();

		$this->load->view('templates/_head');
		$this->load->view('main/index', $data);
		$this->load->view('templates/_foot');
	}
}

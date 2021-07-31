<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$data = [
			'body'		=> 'main'
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar');
		$this->load->view('main/index');
		$this->load->view('main/templates/footer');
	}

	public function ukm()
	{
		$data = [
			'body'		=> 'main-ukm'
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar');
		$this->load->view('main/ukm');
		$this->load->view('main/templates/footer');
	}
}

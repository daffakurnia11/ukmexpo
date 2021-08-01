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
			'body'					=> 'main-ukm',
			'olahraga'			=> $this->db->get_where('ukm_list', ['type' => 'Olahraga'])->result_array(),
			'bidangkhusus'	=> $this->db->get_where('ukm_list', ['type' => 'BidangKhusus'])->result_array(),
			'seni'					=> $this->db->get_where('ukm_list', ['type' => 'Seni'])->result_array(),
			'beladiri'			=> $this->db->get_where('ukm_list', ['type' => 'BelaDiri'])->result_array(),
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar');
		$this->load->view('main/ukm');
		$this->load->view('main/templates/footer');
	}

	public function detail_ukm($slug)
	{
		$data = [
			'body'					=> 'ukm-detail',
			'detail'				=> $this->db->get_where('ukm_list', ['slug' => $slug])->row_array(),
			'faqs'					=> $this->db->get_where('ukm_faq', ['slug'	=> $slug])->result_array()
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar');
		$this->load->view('main/detail');
		$this->load->view('main/templates/footer');
	}
}

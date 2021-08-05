<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$data = [
			'body'		=> 'main',
			'navbar'	=> 'Home'
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar', $data);
		$this->load->view('main/index');
		$this->load->view('main/templates/footer');
	}

	public function ukm()
	{
		$data = [
			'body'					=> 'main-ukm',
			'navbar'				=> 'UKM',

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
		$ukm = $this->db->get_where('ukm_list', ['slug' => $slug])->row_array();

		if ($ukm) {
			$data = [
				'body'					=> 'ukm-detail',
				'navbar'				=> 'UKM',
				'detail'				=> $ukm,
				'faqs'					=> $this->db->get_where('ukm_faq', ['slug'	=> $slug])->result_array()
			];
			$this->load->view('main/templates/header', $data);
			$this->load->view('main/templates/navbar');
			$this->load->view('main/detail');
			$this->load->view('main/templates/footer');
		} else {
			// Status 404
			$this->output->set_status_header('404');

			// 404 Page
			$data = [
				'body'		=> 'state'
			];
			$this->load->view('main/templates/header', $data);
			$this->load->view('state/404');
			$this->load->view('main/templates/empty_footer');
		}
	}

	public function info()
	{
		$data = [
			'body'					=> 'event-body',
			'navbar'				=> 'Info',
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar');
		$this->load->view('main/info');
		$this->load->view('main/templates/footer');
	}

	public function maskot()
	{
		$data = [
			'body'					=> 'mascot-body',
			'navbar'				=> 'Home',
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/navbar');
		$this->load->view('main/mascot');
		$this->load->view('main/templates/footer');
	}
}

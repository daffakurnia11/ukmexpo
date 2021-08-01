<?php
defined('BASEPATH') or exit('No direct script access allowed');

class State extends CI_Controller
{
	public function comingsoon()
	{
		$data = [
			'body'		=> 'state'
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('state/comingsoon');
		$this->load->view('main/templates/empty_footer');
	}
	public function not_found()
	{
		$data = [
			'body'		=> 'state'
		];
		$this->load->view('main/templates/header', $data);
		$this->load->view('state/404');
		$this->load->view('main/templates/empty_footer');
	}
}

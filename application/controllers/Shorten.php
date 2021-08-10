<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shorten extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    date_default_timezone_set("Asia/Jakarta");
  }

  public function create()
  {
    if (!$this->session->userdata('roles') == 'admin') {
      return redirect('admin/login');
    }
    $this->form_validation->set_rules('name', "Nama Shorten Link", 'required|trim', [
      'required'    => 'Nama Shorten Link harus diisi!'
    ]);
    $this->form_validation->set_rules('shorten', "Alamat Shorten Link", 'required|trim|is_unique[shortenlink.shorten]|alpha_dash', [
      'required'    => 'Alamat Shorten Link harus diisi!',
      'is_unique'    => 'Alamat Shorten Link sudah digunakan!',
      'alpha_dash'  => 'Alamat Shorten Link tidak boleh berisi spasi!'
    ]);
    $this->form_validation->set_rules('origin', "Alamat Asli", 'required|trim|valid_url', [
      'required'    => 'Alamat Asli harus diisi!',
      'valid_url'    => 'Alamat Asli harus berupa alamat website'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title'      => 'Buat Shorten Link',
      ];
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/navbar');
      $this->load->view('admin/shortenlink/create');
      $this->load->view('admin/templates/footer');
    } else {
      $data = [
        'name'          => htmlspecialchars($this->input->post('name')),
        'shorten'        => htmlspecialchars($this->input->post('shorten')),
        'origin'        => htmlspecialchars($this->input->post('origin')),
        'date_created'  => date("Y-m-d H:i:s")
      ];
      $this->db->insert('shortenlink', $data);
      redirect('shorten/list');
    }
  }

  public function list()
  {
    if (!$this->session->userdata('roles') == 'admin') {
      return redirect('admin/login');
    }
    $data = [
      'title'      => 'Daftar Shorten Link',
      'lists'      => $this->db->get('shortenlink')->result_array()
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/shortenlink/list', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete_shorten()
  {
    if (!$this->session->userdata('roles') == 'admin') {
      return redirect('admin/login');
    }
    $shorten = $this->input->get('shorten');

    $this->db->delete('shortenlink', ['shorten' => $shorten]);
    redirect('shorten/list');
  }

  public function direct($shorten)
  {
    $data = $this->db->get_where('shortenlink', ['shorten' => $shorten])->row_array();

    if ($data) {
      redirect($data['origin']);
    } else {
      // Status 404
      $this->output->set_status_header('404');

      // 404 Page
      $data = [
        'body'    => 'state'
      ];
      $this->load->view('main/templates/header', $data);
      $this->load->view('state/404');
      $this->load->view('main/templates/empty_footer');
    }
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Virtualexpo extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    date_default_timezone_set("Asia/Jakarta");
  }

  public function index()
  {
    if ($this->session->userdata('name') && $this->session->userdata('type')) {
      redirect('virtualexpo/booth');
    }
    $data = [
      'body'          => 'event-body',
      'navbar'        => 'Event',
    ];
    $this->load->view('main/templates/header', $data);
    $this->load->view('main/templates/navbar');
    $this->load->view('virtualexpo/registration');
    $this->load->view('main/templates/footer');
  }

  public function mahasiswa()
  {
    $data = [
      'name'          => $this->input->post('name'),
      'type'          => 'Mahasiswa',
      'nrp'           => $this->input->post('nrp'),
      'major'         => $this->input->post('major'),
      'date_created'  => date("Y-m-d H:i:s")
    ];

    $this->session->set_userdata('name', $this->input->post('name'));
    $this->session->set_userdata('type', 'Mahasiswa');

    $this->db->insert('virtualexpo', $data);
    redirect('virtualexpo/booth');
  }

  public function umum()
  {
    $data = [
      'name'          => $this->input->post('name'),
      'type'          => 'Umum',
      'origin'        => $this->input->post('origin'),
      'date_created'  => date("Y-m-d H:i:s")
    ];

    $this->session->set_userdata('name', $this->input->post('name'));
    $this->session->set_userdata('type', 'Mahasiswa');

    $this->db->insert('virtualexpo', $data);
    redirect('virtualexpo/booth');
  }

  public function booth()
  {
    if (!$this->session->userdata('name') && !$this->session->userdata('type')) {
      redirect('virtualexpo');
    }
    // redirect('soon');
    // die;
    $this->load->view('virtualexpo/index');
  }

  public function guest()
  {
    if (!$this->session->userdata('roles') == 'admin') {
      return redirect('admin/login');
    }

    $type = $this->input->get('type');

    if ($type == 'Mahasiswa') {
      $data = [
        'title'      => 'Pengunjung Mahasiswa',
        'lists'      => $this->db->get_where('virtualexpo', ['type' => $type])->result_array()
      ];
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/navbar');
      $this->load->view('admin/virtualexpo/mahasiswa', $data);
      $this->load->view('admin/templates/footer');
    }
    if ($type == 'Umum') {
      $data = [
        'title'      => 'Pengunjung Umum',
        'lists'      => $this->db->get_where('virtualexpo', ['type' => $type])->result_array()
      ];
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar', $data);
      $this->load->view('admin/templates/navbar');
      $this->load->view('admin/virtualexpo/umum', $data);
      $this->load->view('admin/templates/footer');
    }
  }
}

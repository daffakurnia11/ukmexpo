<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function index()
  {
    if (!$this->session->userdata('roles') == 'admin') {
      return redirect('admin/login');
    }
    $data = [
      'title'      => 'Dashboard',
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/index');
    $this->load->view('admin/templates/footer');
  }

  public function login()
  {
    if ($this->session->userdata('roles') == 'admin') {
      return redirect('dashboard');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/login');
    } else {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      if ($email === 'admin@admin.com') {
        if ($password === 'admin') {
          $data = [
            'username'    => $email,
            'roles'       => 'admin'
          ];
          $this->session->set_userdata($data);
          redirect('admin');
        } else {
          $this->session->set_flashdata('flash', 'Access Denied');
          redirect('admin/login');
        }
      } else {
        $this->session->set_flashdata('flash', 'Access Denied');
        redirect('admin/login');
      }
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('roles');
    $this->session->sess_destroy();
    redirect('admin/login');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Virtualexpo extends CI_Controller
{
  public function index()
  {
    $data = [
      'body'          => 'event-body',
      'navbar'        => 'Event',
    ];
    $this->load->view('main/templates/header', $data);
    $this->load->view('main/templates/navbar');
    $this->load->view('main/event/virtualexpo-regis');
    $this->load->view('main/templates/footer');
  }
}

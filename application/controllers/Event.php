<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
  public function index()
  {
    $data = [
      'body'          => 'event-body',
      'navbar'        => 'Event',
    ];
    $this->load->view('main/templates/header', $data);
    $this->load->view('main/templates/navbar');
    $this->load->view('main/event/index');
    $this->load->view('main/templates/footer');
  }

  public function elaborasi()
  {
    $data = [
      'body'          => 'elaborasi-body',
      'navbar'        => 'Event',

      'day1'          => $this->db->get_where('event_rundown', ['day' => '1'])->result_array(),
      'day2'          => $this->db->get_where('event_rundown', ['day' => '2'])->result_array(),
      'day3'          => $this->db->get_where('event_rundown', ['day' => '3'])->result_array(),
      'day4'          => $this->db->get_where('event_rundown', ['day' => '4'])->result_array(),
      'day5'          => $this->db->get_where('event_rundown', ['day' => '5'])->result_array(),
    ];
    $this->load->view('main/templates/header', $data);
    $this->load->view('main/templates/navbar');
    $this->load->view('main/event/elaborasi', $data);
    $this->load->view('main/templates/footer');
  }
}

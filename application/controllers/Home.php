<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
  private function fetchLandingData(): array
  {
    $this->load->model('m_Device');
    return $this->m_Device->get_latest_six();
  }

  public function index()
  { 
    $this->load->view('home/landing', [
      'devices' => $this->fetchLandingData()
    ]);
  }
}
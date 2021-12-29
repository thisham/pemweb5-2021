<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
  private function fetchLandingData(): array
  {
    $this->load->model('m_Device');
    return $this->m_Device->get_all();
  }

  public function index()
  { 
    $this->load->view('home/landing', $vars = [
      'devices' => $this->fetchLandingData()
    ]);
  }
}
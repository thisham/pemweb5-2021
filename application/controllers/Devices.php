<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devices extends CI_Controller
{
  private function fetchAllData(): array
  {
    $this->load->model('m_Device');
    return $this->m_Device->get_all();
  }

  public function index()
  { 
    $this->load->view('home/allDevices', [
      'devices' => $this->fetchAllData()
    ]);
  }

  // for async fetch
  private function fetchOneData(int $id): array
  {
    $this->load->model('m_Device');
    return (array) $this->m_Device->get_one($id);
  }

  public function detail(int $id)
  {
    echo json_encode($this->fetchOneData($id));
  }
}
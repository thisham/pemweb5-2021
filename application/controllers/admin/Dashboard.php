<?php

class Dashboard extends CI_Controller
{
  public function index()
  {
    $data['page_title'] = "Dashboard";
    $this->load->view('admin/dashboard', $data);
  }
}

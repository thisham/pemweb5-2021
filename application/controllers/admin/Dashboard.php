<?php

class Dashboard extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Device');
    $this->load->model('M_Order');
  }

  public function index()
  {
    $data['page_title'] = "Dashboard";
    // var_dump($this->M_Device->get_count());
    $data['device_count'] = $this->M_Device->get_count();
    $data['order_count'] = $this->M_Order->get_count();
    $this->load->view('admin/dashboard', $data);
  }
}

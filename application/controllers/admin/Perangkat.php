<?php

class Perangkat extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Device');
  }

  function index()
  {
    $device_list = $this->M_Device->get_all();
    $data["page_title"] = "Perangkat";
    $data["device_list"] = $device_list;
    $this->load->view('admin/device/index', $data);
  }

  function delete($device_id)
  {
    $this->M_Device->delete($device_id);
    redirect(base_url('admin/perangkat'));
  }
}

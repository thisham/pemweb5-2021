<?php

class Perangkat extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data["page_title"] = "Perangkat";
    $this->load->view('admin/device/index', $data);
  }
}

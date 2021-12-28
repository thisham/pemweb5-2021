<?php

class Device extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('admin/list_device');
  }
}

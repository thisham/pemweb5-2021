<?php

class Order extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data["page_title"] = "Order";
    $this->load->view('admin/order/index', $data);
  }
}

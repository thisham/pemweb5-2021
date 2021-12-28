<?php

class Order extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Device');
  }

  function index()
  {
    $order_list = $this->M_Device->get_all();
    $data["page_title"] = "Order";
    $data["order_list"] = $order_list;
    $this->load->view('admin/order/index', $data);
  }
}

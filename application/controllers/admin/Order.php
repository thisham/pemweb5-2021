<?php

class Order extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Order');
    $this->load->model('M_Device');
  }

  function redirect_to_list()
  {
    redirect(base_url('admin/order/list'));
  }

  function list()
  {
    $order_list = $this->M_Order->get_all();
    $data["page_title"] = "Daftar Order";
    $data["order_list"] = $order_list;
    $this->load->view('admin/order/list', $data);
  }

  function new()
  {
    $input = $this->input->post();
    if ($input) {
      $data["id_device"] = $input["id_device"];
      $data["nama"] = $input["name"];
      $data["harga"] = $input["price"];
      $data["deskripsi"] = $input["description"];
      $data["status"] = $input["status"];
      $this->M_Device->insert($data);
      $this->redirect_to_list();
    }

    $data["page_title"] = "Tambah Order";
    $data["device_list"] = $this->M_Device->get_all();
    $this->load->view('admin/order/create', $data);
  }

  function delete($order_id)
  {
    $this->M_Order->delete($order_id);
    $this->redirect_to_list();
  }
}

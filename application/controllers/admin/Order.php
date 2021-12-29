<?php

class Order extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Order');
    $this->load->model('M_Device');
    $this->load->model('M_Auth');
    if (!$this->M_Auth->current_user()) {
      redirect('auth/login');
    }
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
    $data["device_list"] = $this->M_Device->get_all();
    $this->load->view('admin/order/list', $data);
  }

  function new()
  {
    $input = $this->input->post();
    if ($input) {
      $data["id_device"] = $input["id_device"];
      $data["nik_penyewa"] = $input["borrower_id"];
      $data["harga"] = $input["price"];
      $data["tanggal_sewa"] = str_replace("T", " ", $input["start_date"]) . ":00";
      $data["tanggal_kembali"] = str_replace("T", " ", $input["return_date"]) . ":00";
      $data["status"] = $input["status"];
      $this->M_Order->insert($data);
      $this->redirect_to_list();
    }

    $data["page_title"] = "Tambah Order";
    $data["device_list"] = $this->M_Device->get_all();
    $this->load->view('admin/order/create', $data);
  }

  function update($order_id)
  {
    $input = $this->input->post();
    $data["id"] = $order_id;
    $data["id_device"] = $input["id_device"];
    $data["nik_penyewa"] = $input["borrower_id"];
    $data["harga"] = $input["price"];
    $data["tanggal_sewa"] = str_replace("T", " ", $input["start_date"]) . ":00";
    $data["tanggal_kembali"] = str_replace("T", " ", $input["return_date"]) . ":00";
    $data["status"] = $input["status"];
    $this->M_Order->update($data);
    $this->redirect_to_list();
  }

  function delete($order_id)
  {
    $this->M_Order->delete($order_id);
    $this->redirect_to_list();
  }
}

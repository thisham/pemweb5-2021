<?php

class Perangkat extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Device');

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']     = '100';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';

    $this->load->library('upload', $config);
  }

  function redirect_to_list()
  {
    redirect(base_url('admin/perangkat/list'));
  }

  function list()
  {
    $device_list = $this->M_Device->get_all();
    $data["page_title"] = "Perangkat";
    $data["device_list"] = $device_list;
    $this->load->view('admin/device/list', $data);
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

    $data["page_title"] = "Tambah Perangkat Baru";
    $this->load->view('admin/device/create', $data);
  }

  function delete($device_id)
  {
    $this->M_Device->delete($device_id);
    $this->redirect_to_list();
  }

  function update($device_id)
  {
    $input = $this->input->post();
    $data["id_device"] = $device_id;
    $data["nama"] = $input["name"];
    $data["harga"] = $input["price"];
    $data["deskripsi"] = $input["description"];
    $data["status"] = $input["status"];
    $this->M_Device->update($data);
    $this->redirect_to_list();
  }
}

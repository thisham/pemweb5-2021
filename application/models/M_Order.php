<?php

class M_Order extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_count()
  {
    return $this->db->count_all_results('order');
  }

  function get_all()
  {
    return $this->db->query("SELECT `order`.id AS order_id, device.id_device, device.nama AS nama_device, `order`.harga AS harga_order, device.harga AS harga_device, `order`.status AS status_order, tanggal_sewa, tanggal_kembali, nik_penyewa FROM `order` JOIN device ON `order`.id_device = device.id_device")->result();
  }

  function get_one($id)
  {
    return $this->db->get_where('order', array('id' => $id))->result();
  }

  function add($data)
  {
    $this->db->insert('order', $data);
  }

  function update($data)
  {
    $this->db->update('order', $data, array("id" => $data["id"]));
  }

  function delete($id)
  {
    $this->db->delete('order', array("id" => $id));
  }
}

<?php

class M_Device extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_count()
  {
    return $this->db->count_all_results('Device');
  }

  function get_all()
  {
    return $this->db->get('Device')->result();
  }

  function get_latest_six()
  {
    return $this->db->get('Device')->result();
  }

  function get_one($id)
  {
    return $this->db->get_where('Device', array('id_device' => $id))->result();
  }

  function insert($data)
  {
    $this->db->insert('Device', $data);
  }

  function update($data)
  {
    var_dump($data);
    $this->db->update('Device', $data, array("id_device" => $data["id_device"]));
  }

  function delete($id)
  {
    $this->db->delete('Device', array("id_device" => $id));
  }
}

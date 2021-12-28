<?php

class M_Order extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_count()
  {
    return $this->db->count_all_results('Order');
  }

  function get_all()
  {
    return $this->db->get('Order')->result();
  }

  function get_one($id)
  {
    return $this->db->get_where('Order', array('id' => $id))->result();
  }

  function add($data)
  {
    $this->db->insert('Order', $data);
  }

  function update($data)
  {
    $this->db->update('Order', $data, array("id" => $data["id"]));
  }

  function delete($id)
  {
    $this->db->delete('Order', array("id" => $id));
  }
}

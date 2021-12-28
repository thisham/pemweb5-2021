<?php

class Article extends CI_Controller
{
  public function index()
  {
    $data["page_title"] = "Tambah Data";
    $this->load->view('admin/tambah_data', $data);
  }
}

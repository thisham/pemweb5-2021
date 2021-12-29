<?php

class Auth extends CI_Controller
{
  public function index()
  {
    show_404();
  }

  public function login()
  {
    $this->load->model('M_Auth');

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if ($this->M_Auth->login($username, $password)) {
      redirect('admin/dashboard');
    } else {
      $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
    }

    $data["page_title"] = "Login";
    $this->load->view('login_form', $data);
  }

  public function logout()
  {
    $this->load->model('M_Auth');
    $this->M_Auth->logout();
    redirect(site_url());
  }
}

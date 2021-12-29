<?php

class M_Auth extends CI_Model
{
  private $_table = "admin";
  const SESSION_KEY = 'user_id';

  public function rules()
  {
    return [
      [
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'required'
      ],
      [
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|max_length[255]'
      ]
    ];
  }

  public function login($username, $password)
  {
    $this->db->where('username', $username);
    $query = $this->db->get($this->_table);
    $user = $query->row();

    if (!$user) {
      return FALSE;
    }

    if (!$password === $user->password) {
      return FALSE;
    }

    $this->session->set_userdata([self::SESSION_KEY => $user->id]);
    return $this->session->has_userdata(self::SESSION_KEY);
  }

  public function current_user()
  {
    if (!$this->session->has_userdata(self::SESSION_KEY)) {
      return null;
    }

    $user_id = $this->session->userdata(self::SESSION_KEY);
    $query = $this->db->get_where($this->_table, ['id' => $user_id]);
    return $query->row();
  }

  public function logout()
  {
    $this->session->unset_userdata(self::SESSION_KEY);
    return !$this->session->has_userdata(self::SESSION_KEY);
  }
}

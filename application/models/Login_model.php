<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

  function is_logged_in()
  {
    return $this->session->userdata('id');
  }

  function index()
  {
    $this->load->view('login');
  }

  function aksi_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => $password
    );
    $cek = $this->m_login->cek_login("users", $where)->num_rows();
    if ($cek > 0) {

      $data_session = array(
        'nama' => $username,
        'status' => "login"
      );

      $this->session->set_userdata($data_session);

      redirect(base_url("admin"));
    } else {
      echo "Username dan password salah !";
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }
}

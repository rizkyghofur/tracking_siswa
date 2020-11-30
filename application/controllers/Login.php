<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('login_model');
  }

  public function index()
  {

    if ($this->session->userdata("status") == "online") {
      redirect(base_url('beranda'));
    }

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
            <div class="text-center"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

    if ($this->form_validation->run() == TRUE) {

      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $where = array(
        'username' => $username,
        'password' => md5($password)
      );
      $check = $this->login_model->check_login("users", $where)->num_rows();
      if ($check > 0) {
        $session = array(
          'nama' => $username,
          'status' => "online"
        );

        $this->session->set_userdata($session);
        redirect(base_url('beranda'));
      } else {
        $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
            <div class="text-center"><b><i class="fa fa-exclamation-circle"></i> Peringatan</b> nama pengguna atau kata sandi salah!</div></div>';
        $this->load->view('login', $data);
      }
    } else {
      $this->load->view('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }
}

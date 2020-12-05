<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IsiData extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('login_model');
  }

  public function index()
  {
    $this->load->view('isi_data');
  }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
  function check_login($table, $where)
  {
    return $this->db->get_where($table, $where);
  }
}

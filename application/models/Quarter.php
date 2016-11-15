<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quarter extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all_quater()
  {
      $query = $this->db->get('quarters');
      return $query->result();
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Year extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all_year()
  {
      $query = $this->db->get('years');
      return $query->result();
  }

}

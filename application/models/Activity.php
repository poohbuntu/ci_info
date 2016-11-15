<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data()
  {
      $this->db->select();
      $this->db->from('info_activity');
      $this->db->where(array(
          'year' => $this->input->post('year')
      ));
      $query = $this->db->get();
      return $query->result();
  }

}

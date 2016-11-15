<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data()
  {
      $this->db->select();
      $this->db->from('info_research');
      $this->db->where(array(
          'year' => $this->input->post('year')
      ));
      $query = $this->db->get();
      return $query->result();
  }

  public function count_year()
  {
      $this->db->select('year, count(*) as list');
      $this->db->from('info_research');
      $this->db->group_by('year');
      $query = $this->db->get();

      foreach ($query->result() as $row) {
         $series[] = array('name'=>$row->year, 'data'=>[[$row->list]]);
      }

      return $series;
  }
}

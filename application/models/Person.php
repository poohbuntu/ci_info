<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data()
  {
      $this->db->select();
      $this->db->from('info_personnel');
      $this->db->where(array(
          'year' => $this->input->post('year')
      ));
      $query = $this->db->get();
      return $query->result();
  }

  public function count_by_section()
  {
      $this->db->select('section, count(*) as list');
      $this->db->from('info_personnel');
      $this->db->group_by('section');
      $this->db->order_by('section');
      $query = $this->db->get();

      foreach ($query->result() as $row) {
         $series2[] = array('name'=>$row->section, 'data'=>[[$row->list]]);
      }

      return $series2;
  }

  public function count_by_educate()
  {
      $this->db->select('educate, count(*) as list');
      $this->db->from('info_personnel');
      $this->db->group_by('educate');
      $this->db->order_by('educate');
      $query = $this->db->get();

      foreach ($query->result() as $row) {
         $series[] = array('name'=>$row->educate, 'data'=>[[$row->list]]);
      }

      return $series;
  }

  public function count_by_gender()
  {
      $this->db->select('gender, count(*) as list');
      $this->db->from('info_personnel');
      $this->db->group_by('gender');
      $this->db->order_by('gender');
      $query = $this->db->get();

      foreach ($query->result() as $row) {
         $series[] = array('name'=>$row->gender, 'data'=>[[$row->list]]);
      }

      return $series;
  }

  public function vacation()
  {
      $this->db->select('info_personnel.name, info_personnel.name2, info_personnel.name3, info_personnel3.type');
      $this->db->from('info_personnel3');
      $this->db->join('info_personnel', 'info_personnel3.name=info_personnel.id');
      $query = $this->db->get();
      return $query->result();
//      SELECT info_personnel.name,info_personnel.name2,info_personnel.name3, info_personnel3.type
//FROM info_personnel3
//INNER JOIN info_personnel
//ON info_personnel3.name=info_personnel.id;
  }
}

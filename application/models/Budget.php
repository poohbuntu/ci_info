<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data()
  {
      $this->db->select();
      $this->db->from('info_budget');
      $this->db->where(array(
          'budget_of_year'=>$this->input->post('year'),
          'budget_quarter'=>$this->input->post('quarter'),
          'budget_name'=>'รวม'
      ));
      $query = $this->db->get();

      foreach ($query->result() as $row) {
         $data1[] = array($row->budget_income);
         $data2[] = array($row->budget_total_funds);
         $data3[] = array($row->budget_remain);
      }

      $series[] = array('name'=>'รายรับ', 'data'=>$data1);
      $series[] = array('name'=>'รายจ่าย', 'data'=>$data2);
      $series[] = array('name'=>'คงเหลือ', 'data'=>$data3);

      return $series;
  }

}

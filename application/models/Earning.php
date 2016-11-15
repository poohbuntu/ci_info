<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Earning extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data()
  {
      $this->db->select();
      $this->db->from('info_earning');
      $this->db->where(array(
          'earning_of_year'=>$this->input->post('year'),
          'earning_quarter'=>$this->input->post('quarter'),
          'earning_name'=>'รวม'
      ));
      $query = $this->db->get();

      foreach ($query->result() as $row) {
         $data1[] = array($row->earning_income);
         $data2[] = array($row->earning_total_funds);
         $data3[] = array($row->earning_remain);
      }

      $series[] = array('name'=>'รายรับ', 'data'=>$data1);
      $series[] = array('name'=>'รายจ่าย', 'data'=>$data2);
      $series[] = array('name'=>'คงเหลือ', 'data'=>$data3);

      return $series;
  }

}

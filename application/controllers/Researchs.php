<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Researchs extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array(
        'year'=>'year',
        'research'=>'research'
    ));
    $this->view_data = array();
  }

  public function index()
  {
      $this->view_data['years'] = $this->year->get_all_year();


      $count_year = $this->research->count_year();

      $categories_data = array('ปี');
      $this->view_data['categories_data'] = json_encode($categories_data);

      $this->view_data['series_data'] = json_encode($count_year,JSON_NUMERIC_CHECK);
      $this->load->view('research/index', $this->view_data);
  }

  public function show_table()
  {
      $data['years'] = $this->year->get_all_year();
      $data['research'] = $this->research->get_data();
      $this->load->view('research/show_table', $data);
  }

}

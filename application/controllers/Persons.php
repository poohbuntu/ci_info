<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persons extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array(
        'year'=>'year',
        'person'=>'person'
    ));
    $this->view_data = array();
  }

  public function index()
  {
      $this->view_data['years'] = $this->year->get_all_year();

      $count_by_section = $this->person->count_by_section();
      $categories_data = array('สังกัด');
      $this->view_data['categories_data'] = json_encode($categories_data);
      $this->view_data['series_data'] = json_encode($count_by_section,JSON_NUMERIC_CHECK);

      $count_by_educate = $this->person->count_by_educate();
      $categories_data2 = array('วุฒิการศึกษา');
      $this->view_data['categories_data2'] = json_encode($categories_data2);
      $this->view_data['series_data2'] = json_encode($count_by_educate,JSON_NUMERIC_CHECK);

      $count_by_gender = $this->person->count_by_gender();
      $categories_data3 = array('เพศ');
      $this->view_data['categories_data3'] = json_encode($categories_data3);
      $this->view_data['series_data3'] = json_encode($count_by_gender,JSON_NUMERIC_CHECK);

      $this->load->view('person/index', $this->view_data);
  }

  public function show_table()
  {
      $data['years'] = $this->year->get_all_year();
      $data['research'] = $this->research->get_data();
      $this->load->view('research/show_table', $data);
  }

  public function vacations()
  {
      $data['years'] = $this->year->get_all_year();
      $data['vacation'] = $this->person->vacation();
      $this->load->view('person/vacation_table', $data);
  }

}

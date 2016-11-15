<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array(
        'year'=>'year',
        'activity'=>'activity'
    ));
  }

  public function index()
  {
      $data['years'] = $this->year->get_all_year();
      $this->load->view('activity/index', $data);
  }

  public function show_table()
  {
      $data['years'] = $this->year->get_all_year();
      $data['activity'] = $this->activity->get_data();
      $this->load->view('activity/show_table', $data);
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cultures extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array(
        'year'=>'year',
        'culture'=>'culture'
    ));
  }

  public function index()
  {
      $data['years'] = $this->year->get_all_year();
      $this->load->view('culture/index', $data);
  }

  public function show_table()
  {
      $data['years'] = $this->year->get_all_year();
      $data['culture'] = $this->culture->get_data();
      $this->load->view('culture/show_table', $data);
  }

}

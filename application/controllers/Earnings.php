<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Earnings extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array(
        'year'=>'year',
        'quarter'=>'quarter',
        'earning'=>'earning'
    ));
    $this->view_data = array();
  }

  public function index()
  {
    $data['years'] = $this->year->get_all_year();
    $data['quarters'] = $this->quarter->get_all_quater();
    $this->load->view('earning/index', $data);
  }

  public function show_chart()
  {
    $this->view_data['years'] = $this->year->get_all_year();
    $this->view_data['quarters'] = $this->quarter->get_all_quater();

    $this->view_data['year_data'] = $this->input->post('year');
    $this->view_data['quarter_data'] = $this->input->post('quarter');

    if ($this->input->post('quarter')==1) {
        $categories_data = array('ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
        $this->view_data['categories_data'] = json_encode($categories_data);
    } elseif ($this->input->post('quarter')==2) {
        $categories_data = array('มากราคม', 'กุมภาพันธ์', 'มีนาคม');
        $this->view_data['categories_data'] = json_encode($categories_data);
    } elseif ($this->input->post('quarter')==3) {
        $categories_data = array('เมษายน', 'พฤษภาคม', 'มิถุนายน');
        $this->view_data['categories_data'] = json_encode($categories_data);
    } else {
        $categories_data = array('กรกฎาคม', 'สิงหาคม', 'กันยายน');
        $this->view_data['categories_data'] = json_encode($categories_data);
    }

    $data = $this->earning->get_data();
    $this->view_data['series_data'] = json_encode($data,JSON_NUMERIC_CHECK);
    $this->load->view('earning/show_chart', $this->view_data);
  }

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

  function __construct(){
    parent::__construct
    #$this->load->helper('url');
    $this->load->model('users_model');
  }

  public function index(){
    $data['user_list'] = $this->users_model->get_all_users();
    $this->load->view('show_users', $data);
  }
}
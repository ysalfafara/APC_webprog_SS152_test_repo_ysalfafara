<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  function __construct(){
    parent::__construct();
    #$this->load->helper('url');
    $this->load->model('users_model');
  }

  public function index(){
    $data['user_list'] = $this->users_model->get_all_users();
    $this->load->view('view_records', $data);
  }

  public function add_form(){
    $this->load->view('insert.php');
  }

  public function insert_new_users(){
    $udata['fname'] = $this->input->post('fname');
    $udata['lname'] = $this->input->post('lname');
    $udata['nickname'] = $this->input->post('nickname');
    $udata['email'] = $this->input->post('email');
    $udata['homeAdd'] = $this->input->post('homeAdd');
    $udata['gender'] = $this->input->post('gender');
    $udata['phoneNum'] = $this->input->post('phoneNum');
    $udata['comment'] = $this->input->post('comment');

    $res = $this->users_model->insert_users_to_db($udata);

    if($res){
      header('location:'.base_url()."index.php/users/".$this->index());
    }
  }

}
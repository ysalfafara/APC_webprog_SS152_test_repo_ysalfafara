<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	public function index(){
		$this->load->view('Form.php'); 
		$this->load->helper('html');
	}

}
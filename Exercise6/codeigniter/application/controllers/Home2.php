<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home2 extends CI_Controller {

	public function index(){
		$this->load->view('Trivia.php'); 
		$this->load->helper('html');
	}

}
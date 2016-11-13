<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trivia extends CI_Controller {

	public function index(){
		$this->load->view('Trivia.php'); 
		$this->load->helper('html');
	}

}
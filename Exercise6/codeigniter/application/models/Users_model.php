<?php

class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_users(){
		$query = $this->db->get('users');
		return $query->result();
	}

	public function insert_users_to_db($data){
		return $this->db->insert('users', $data);
	}

	public function getById($user_id){
		$query = $this->db->get_where('users', array('user_id' => $user_id));
		return $query->row_array();
	}

	public function edit(){
		$user_id = $this->uri->segment(3);
		$data['user'] = $this->users_model->getById($user_id);
		$this->load->view('edit', $data);
	}

	public function update_info($data, $user_id){
		$this->db->where('users.user_id', $user_id);
		return $this->db->update('users', $data);
	}

	public function delete_a_user($user_id){
		$this->db->where('users.user_id', $user_id);
		return $this->db->delete('users');
	}
}

?>
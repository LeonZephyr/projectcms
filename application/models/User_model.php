<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function simpan() {
        $data = array(
			'nama'		=> $this->input->post('nama'),
			'username'		=> $this->input->post('username'),
			'password'		=> md5($this->input->post('password')),
			'level'		=> $this->input->post('level'),
		);
		$this->db->insert('user', $data);
    }
    public function check_user($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }

    // Simpan data user ke database
    public function insert_user($data)
    {
        $this->db->insert('users', $data);
	}
    public function update_data(){
        $where = array(
			'id_user'	=> $this->input->post('id_user')
		);
		$data = array(
			'nama'		=> $this->input->post('nama')
		);
		$this->db->update('user', $data, $where);
    }

}
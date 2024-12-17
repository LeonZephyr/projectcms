<?php
 
 class Registrasi extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('User_model');
		if($this->session->userdata('level')<>'Kontributor'){
			redirect('home');
		}
    }
    public function index(){

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->db->from('user');
        if($this->form_validation->run() == FALSE){
            
            $this->load->view('registrasi');
            
            } else {
                $data = array(
                    'id_user' => '',
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'level' => 'Kontributor',
                );
    
                $this->db->insert('user', $data);
                redirect('home');
            }
        }

        
 }
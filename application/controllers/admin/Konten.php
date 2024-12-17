<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level') == NULL){
            redirect('auth');
        }
    }

    public function index() {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori_konten = $this->db->get()->result_array();
        
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori =kategori.id_kategori' ,'left');
        $this->db->join('user', 'konten.username=user.username' , 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();

        $data = array (
            'title'    => 'Halaman Konten',
            'kategori' => $kategori_konten,
            'konten'   => $konten
        );

        $this->template->load('template_admin', 'admin/konten_index', $data);
    }

    public function simpan() {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path']   = './assets/upload/konten/';
        $config['max_size']      = 500 * 1024; 
        $config['file_name']     = $namafoto;
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible px-6" role="alert">
                Ukuran foto terlalu besar! Upload ulang dengan ukuran kurang dari 5MB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        
        $this->db->from('konten');
        $this->db->where('judul', $this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if ($cek<> NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible px-3" role="alert">
            Judul Konten Sudah ada!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        redirect('admin/konten');
        }
        $data = array(
            'judul'        => $this->input->post('judul'),
            'id_kategori'        => $this->input->post('id_kategori'),
            'keterangan'        => $this->input->post('keterangan'),
            'tanggal'      => date('Y-m-d'),
            'foto'         => $namafoto,
            'username'         => $this->session->userdata('username'),
            'slug'      => str_replace(' ','-', $this->input->post('judul'))
        );

        $this->db->insert('konten', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible px-3" role="alert">
            Konten berhasil ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konten');
    }
    public function update() {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']   = 'assets/upload/konten/';
        $config['max_size']      = 500 * 1024; 
        $config['file_name']     = $namafoto;
        $config['overwrite']     = true;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible px-6" role="alert">
                Ukuran foto terlalu besar! Upload ulang dengan ukuran kurang dari 5MB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        
        $data = array(
            'judul'        => $this->input->post('judul'),
            'id_kategori'        => $this->input->post('id_kategori'),
            'keterangan'        => $this->input->post('keterangan'),
            'foto'         => $namafoto,
            'slug'      => str_replace(' ','-', $this->input->post('judul'))
        );

        $where = array('foto' => $this->input->post('nama_foto'));
        
        $this->db->update('konten',$data, $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible px-3" role="alert">
            Konten berhasil diupdate!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konten');
    }

    public function delete($id) {
        $filename=FCPATH.'/assets/upload/konten/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/konten/".$id);
        }               
        $where = array('foto' => $id);
        $this->db->delete('konten', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
            Konten berhasil dihapus.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konten');
    }

}
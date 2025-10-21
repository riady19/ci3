<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
    public function __construct()
{
  parent::__construct();
  is_logged_in();
}
    public function index()
   {

    $data['title'] = 'Pesan Masuk';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pesan'] = $this->M_pesan->get_all_data();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pesan/index', $data);
    $this->load->view('template/footer');

   }
   public function addpesan()
   {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $pesan = $this->input->post('pesan');

 

    //membuat array sesuai dengan urutan yang ada di urutan database, (harus urut dan namanya sesuai) penamaan $name dkk juga harus sama dengan variabel yang dibuat diatas
    $data = array(
        'nama' => $nama,
        'email' => $email,
        'pesan' => $pesan,
        
    );
    $this->db->insert('pesan', $data); 
    $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
    Pesan Berhasil Terkirim!
  </div>');
    //query untuk insert tanpa model  $this->session->set_flashdata('pesan' , 
    redirect('home');

   }
}
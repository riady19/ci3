<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
   {
 
  $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
  $data['siswa'] = $this->M_siswa->get_all_data();
  $data['title'] = 'Home Page | Riadi@2025';

  $this->load->view('home/navbar', $data);
  $this->load->view('home/index', $data);

  
   }    
   public function gallery()
   {

    $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
    $data['siswa'] = $this->M_siswa->get_all_data();
    $data['title'] = 'Gallery | Riadi@2025';
    $this->load->view('home/navbar', $data);
  $this->load->view('home/gallery', $data);
   }
   }



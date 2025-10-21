<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function index()
   {
  $data['title'] = 'Home Page';
  $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
     $this->load->view('sample/index', $data);

   }    
   }
   ?>


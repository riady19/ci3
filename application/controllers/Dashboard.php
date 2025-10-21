<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
{
  parent::__construct();
  is_logged_in();
}
	public function index()
	{
               
        
              $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
              $data['title'] = 'Admin page';
              $this->load->view('template/header', $data );
              $this->load->view('template/sidebar');
              $this->load->view('dashboard/topbar', $data);
              $this->load->view('dashboard/index');
              $this->load->view('dashboard/footer');

  
	}
}

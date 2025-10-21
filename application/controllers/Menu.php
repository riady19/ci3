<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
  public function __construct()
{
  parent::__construct();
  is_logged_in();
}
    public function index()
   {
    $data['title'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('menu/index',$data);
    $this->load->view('template/footer');
   }else {
    $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			New Menu Added!
		  </div>');
					  redirect('menu');
   }
   }

   public function addmenu()
   {
    $this->form_validation->set_rules('menu', 'Menu', 'required|trim');
    $this->M_menu->addmenu();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    New Menu Added!
    </div>');
          redirect('Menu');
   }
   public function neweditmenu()
   {
   $data['menu'] = $this->M_menu->ambil_id_menu($id);
  
   }
   public function editmenu()
   {
    $this->M_menu->editmenu($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Edit Menu Success!
    </div>');
          redirect('Menu');
   }

   public function submenu()
   {
    $data['title'] = 'Submenu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->model('Menu_model', 'menu' );

    $data['subMenu'] = $this->menu->getSubMenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');
  
    if($this->form_validation->run() == false) {
      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar', $data);
      $this->load->view('dashboard/topbar', $data);
      $this->load->view('menu/submenu',$data);
      $this->load->view('dashboard/footer');
    }
   }
   public function hapus_data($id)
   {
   $this->M_menu->hapus_data($id);
   $this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
   Data Berhasil DIhapus!
 </div>');
   redirect('menu');
    }
   
    }
   
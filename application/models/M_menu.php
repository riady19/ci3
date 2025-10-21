<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model
{
    public function get_all_data()
    {
        return $this->db->get('user_menu')->result_array();
    } 
    public function addmenu()
        {
          $data = [
            "menu" => $this->input->post('menu'),     
         ];
            $this->db->insert('user_menu', $data);
        }
        public function ambil_id_menu()
        {
          $this->db->get_where('user_menu', ['id' => $id])->row_array();
        }
        public function editmenu()
        {
            $data = [
                "menu" => $this->input->post('menu'),
            
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('user_menu' , $data);
        }
   
        public function hapus_data($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('user_menu');
        }

    }
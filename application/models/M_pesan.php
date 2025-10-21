<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model
{
    public function get_all_data()
    {
        return $this->db->get('pesan')->result_array();
    } 

    public  function addpesan()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "email" =>$this->input->post('email'),
            "pesan" => $this->input->post('pesan'),
         ];
            $this->db->insert('pesan', $data); 
        }

    }

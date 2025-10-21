<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    public function get_all_data()
    {
        return $this->db->get('siswa')->result_array();
    } 

     public function get_count()
    {
    $sql = "SELECT count('id') as id FROM siswa";
    $result = $this->db->query($sql);
    return $result->row()->id;
    }

    public function get_count_user()
    {
    $sql = "SELECT count('id') as id FROM user";
    $result = $this->db->query($sql);
    return $result->row()->id;
    }
        public function proses_tambah_data()
        {
          $data = [
            "nis" => $this->input->post('nis'),
            "nama" =>$this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "kelas" => $this->input->post('kelas'),
            "hobi" => $this->input->post('hobi'),
            "telepon" => $this->input->post('telepon'),
            "agama" => $this->input->post('agama'),
            "foto" => $this->input->post('foto'),
         ];
            $this->db->insert('siswa', $data);
        }
        public function hapus_data($id)
        {
         
            $this->db->where('id', $id);
            $this->db->delete('siswa');
        }
      public function ambil_id_siswa()
      {
        $this->db->get_where('siswa', ['id' => $id])->row_array();
      }
      public function proses_edit_data($id)
      {
                   //method untuk input data
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $kelas = $this->input->post('kelas');
        $hobi = $this->input->post('hobi');
        $telepon = $this->input->post('telepon');
        $agama = $this->input->post('agama');
        $foto = $this->input->post('foto');
      


        //variabel id user untuk menangkap sesion id_user 
//untuk menampung name data from dari view

// perintah untuk upload foto dsini yang diambil adalah nama dari fotonya dan filenya diupload ke folder "GAMBAR" pada $path, kemduian untuk ekstensinya di allowed types
       
        $data['gambar']='';
        $foto = $_FILES['foto']['name'];
        $id = $this->input->post('id');
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'png|PNG|jpg|jpeg|JPEG';
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('foto')) 
        {
          echo "gagal tambah" ;
        } else {
          $foto = $this->upload->data('file_name');
          $data['gambar'] = $foto;
        }
     

        //membuat array sesuai dengan urutan yang ada di urutan database, (harus urut dan namanya sesuai) penamaan $name dkk juga harus sama dengan variabel yang dibuat diatas
        $data = array(
            'nis' => $nis,
            'nama' => $nama,
            'alamat' => $alamat,
            'kelas' => $kelas,
            'hobi' => $hobi,
            'telepon' => $telepon,
            'agama' => $agama,
            'foto' => $foto,
        );
        $this->db->where('id', $id);
        $this->db->update('siswa', $data); 
        $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        //query untuk insert tanpa model  $this->session->set_flashdata('pesan' , 
        redirect('Siswa');

               
}
       public function detail_cetak()
       {
        $this->db->get('siswa', ['id' => $id])->row_array();
       }
      
    
       }


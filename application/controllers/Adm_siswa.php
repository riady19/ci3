<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_siswa extends CI_Controller {
  public function __construct()
{
  parent::__construct();
  is_logged_in();
}
    public function index()
   {
    $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
    $data['siswa'] = $this->M_siswa->get_all_data();
    $data['title'] = 'Data Siswa';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('siswa/adm_siswa',$data);
    $this->load->view('template/footer');

    }
public function tambah_data()
{
    $data['siswa'] = $this->M_siswa->get_all_data();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('Home/tambah_data',$data);
    $this->load->view('template/footer');
   }
   public function proses_tambah_data()
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

        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'png|PNG|jpg|jpeg|JPEG|bmp|pdf|zip|rar';
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
        $this->db->insert('siswa', $data); 
        $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">
        Data Berhasil DItambah!
      </div>');
        //query untuk insert tanpa model  $this->session->set_flashdata('pesan' , 
        redirect('Home');

               
}
   public function hapus_data($id)
   {
   $this->M_siswa->hapus_data($id);
   $this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">
   Data Berhasil DIhapus!
 </div>');
   redirect('Home');
    }
    public function edit_data()
    {
    $data['siswa'] = $this->M_siswa->ambil_id_siswa($id);
   
    }
    public function proses_edit_data()
    {
        $this->M_siswa->proses_edit_data($id);
        $this->session->set_flashdata('pesan' , '<div class="alert alert-primary" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home');
    }
  public function detail_cetak()
  {
   $data['siswa'] = $this->M_siswa->detail_cetak($id);
   $this->load->view('home/detail_cetak');
  }
  
  }
  
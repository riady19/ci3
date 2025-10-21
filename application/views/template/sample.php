
					<!-- Begin Page Content -->
					 <!-- DataTales Example -->
                     <div class="container">
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="m-0 font-weight-bold text-primary"> <h3>DATA SISWA
                            <a href="<?php echo base_url('Home/tambah_data') ?>" class="btn btn-primary float-right" >Tambah Data</a>
</div>
 <br>
                        
                    <div class="card-body">
                   <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered table-hover p-4 " style="width:100%">
                                    <thead class="table-dark">
                                      <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Kelas</th>
                                            <th>Hobi</th>
                                            <th>Telepon</th>
                                            <th>Agama</th>
                                            <th>Foto</th>
                                            <th colspan="2" class="text-center">Aksi</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                        <?php 
                                        $no= 1;
 
                                    //buat array//
    
                                    foreach ($siswa as $sis):
                                        ?>

<tr>
                                        <td><?php echo $no++;?></td>
                                            <td><?php echo $sis['nis'];?></td>
                                            <td><?php echo $sis['nama'];?></td>
                                            <td><?php echo $sis['alamat'];?></td>
                                            <td><?php echo $sis['kelas'];?></td>
                                            <td><?php echo $sis['hobi'];?></td>
                                            <td><?php echo $sis['telepon'];?></td>
                                            <td><?php echo $sis['agama'];?></td>
                                            <td><a href=""></a><img src="file/img/<?php echo $sis['foto'] ; ?>" style="width: 100%;"></td>

                                            <td> <a href="<?php echo base_url() ?>Home/edit_data/<?php echo $sis['id']; ?>" class="btn btn-outline-primary" >Edit</a> </td>

                                           <td><a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $sis['id']; ?>" class="btn btn-outline-danger" >Hapus</a> </td>
                                        </tr>
                                       <?php endforeach;?>
                                       </tbody>
                                    </table>
                            
                                    <br>
                                    
                                    
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                      </div>
                                  
                                 

	 <!-- DataTales Example -->
    
$data['foto']='';
        $foto = $_FILES['foto']['name'];

        $config['upload_path'] = './gambar';
        $config['allowed_types'] = 'png|PNG|jpg|jpeg|JPEG|bmp|pdf|zip|rar';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        if (!$this->upload->data('file_name')) {
            $gambar = 'Tidak ada file';
        } else {
            $gambar = $this->upload->data('file_name');
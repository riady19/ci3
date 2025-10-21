
					<!-- Begin Page Content -->
					 <!-- DataTales Example -->
                     <div class="container">
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="m-0 font-weight-bold text-success"> <h3><?= $title;?></h3>
                            
                              
 <br>
                        
                    <div class="card-body">
                      <?php echo $this->session->flashdata('pesan');?>
                   <div class="table">
                              <table id="example" class="table table-striped table-bordered table-hover p-4 table-responsive" style="width:100%">
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
                                            <th class="text-center">Aksi</th>
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
                                            <td><img src="<?php echo base_url() . './gambar/' . $sis['foto'];?>" width="50"></td>


                                            <!--view MODAL -->  
                                            <td><button type="button" class="btn btn-outline-primary float-right fas fa-eye" data-toggle="modal" data-target="#ModalView<?php echo $sis['id'];?> " >
                                    </button>

                                    <div class="modal fade" id="ModalView<?php echo $sis['id']; ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fw-bold text-white" id="modalViewDataLabel">Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container-fluid">
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-6">
         <br>
         <i class="text-danger">NIS :</i>  <?php echo $sis['nis']; ?> <br />
         <i class="text-danger">Nama :</i>  <?php echo $sis['nama']; ?> <br />
         <i class="text-danger">Alamat :</i> <?php echo $sis['alamat']; ?>  <br />
         <i class="text-danger">Hobi :</i>  <?php echo $sis['hobi']; ?>  <br />
         <i class="text-danger">Telepon :</i>  <?php echo $sis['telepon']; ?> <br />
         <i class="text-danger">Agama :</i>  <?php echo $sis['agama']; ?> <br />

        </div>
        <div class="col-sm-6 d-flex">
        <a href=""></a><img src="gambar/<?php echo $sis['foto'] ; ?>" style="width: 100%;">
      
        
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url() ?>Home/detail_cetak/<?php echo $sis['id'];?>" class="btn btn-primary">Cetak</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Modal tambah data-->



                                            


                                       
                                        </tr>
                                       <?php endforeach;?>
                                       </tbody>
                                    </table>
                            
                                    
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src=" https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src=" https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap4.js"></script>
</div>
                                    <br>
                                    
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                      </div>
                                  
                                 


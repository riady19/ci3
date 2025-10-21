
					<!-- Begin Page Content -->
					 <!-- DataTales Example -->
                     <div class="container">
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="m-0 font-weight-bold text-primary"> <h3>DATA GURU
                            
                              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
<!--modala triger end-->
</div> 


<!-- Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gradient-primary">
        <h5 class="modal-title text-white
" id="exampleModalLabel">Form Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
        <form method="post" action="<?= base_url('Home/proses_tambah_data') ?>" enctype="multipart/form-data">
<div class="form-group row">
    <label for="nis" class="col-sm-3 col-form-label">NIS</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="nis" placeholder="Masukan NIS" name="nis" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="hobi" placeholder="Masukan Hobi" name="hobi" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="telepon" class="col-sm-3
    col-form-label">Telepon</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="telepon" placeholder="Masukan telepon" name="telepon" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="agama" placeholder="Masukan Agama" name="agama" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="foto" class="col-sm-3 col-form-label">Foto</label>
    <div class="col-sm-8">
    <input type="file" class="form-control" id="foto" name="foto" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="submit" class="col-sm-3 col-form-label"></label>
    <div class="col-sm-8">
        <button type="submit" class="badge badge-primary">Tambah</button>
        <button type="reset" class="badge badge-danger">Reset</button>
    </div>
  </div>
  <br>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end Modal tambah data-->
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
                                            <th colspan="3" class="text-center">Aksi</th>
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
                                            <td><button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#ModalView<?php echo $sis['id'];?> " >
                                      View
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



                                            <!-- Button trigger modal -->
                                    <td><button type="submit" class="btn btn-success float-right" data-toggle="modal" data-target="#ModalEdit<?php echo $sis['id'];?> " >
                                      Edit
                                    </button>
                                    </td>
                                  <!--modala triger end-->
<!-- Modal tampil EDIT-->
<?php 
 foreach ($siswa as $sis) :
  ?>
<div class="modal fade" id="ModalEdit<?php echo $sis['id'];?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gradient-success">
        <h5 class="modal-title text-white
" id="exampleModalLabel">Form Edit Data</h5>
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
        <form method="post" action="<?= base_url('Home/proses_edit_data') ?>" enctype="multipart/form-data">
      

        <input type="hidden" name="id" value="<?php echo $sis['id']; ?>">
<div class="form-group row">
    <label for="nis" class="col-sm-3 col-form-label">NIS</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="nis"  name="nis" value="<?php echo $sis['nis']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="<?php echo $sis['nama']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="<?php echo $sis['alamat']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas" value="<?php echo $sis['kelas']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="hobi" placeholder="Masukan Hobi" name="hobi" value="<?php echo $sis['hobi']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="telepon" class="col-sm-3
    col-form-label">Telepon</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="telepon" placeholder="Masukan telepon" name="telepon" value="<?php echo $sis['telepon']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="agama" class="col-sm-3 col-form-label">Agama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="agama" placeholder="Masukan Agama" name="agama" value="<?php echo $sis['agama']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="foto" class="col-sm-3 col-form-label">Foto</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
    <img src="<?php echo base_url() . './gambar/' . $sis['foto']; ?>" style="width;100">
  </div>

  <div class="form-group row">
    <label for="submit" class="col-sm-3 col-form-label"></label>
    <div class="col-sm-8">
        <button type="submit" class="badge badge-primary">Ubah</button>
        <button type="reset" class="badge badge-danger">Reset</button>
    </div>
  </div>
  <br>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </form>
      </div>
     
        
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- end Modal edit-->


                                        <!--Hapus Data-->
                                           <td onclick="javascrip: return confirm('Ente Yakin Mau Dihapus ?')"> <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $sis['id']; ?>" class="btn btn-danger float-right" > Hapus</a> </td>
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
                                      </div>
                                  
                                 


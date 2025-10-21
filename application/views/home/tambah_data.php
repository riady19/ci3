<div class="container">
<div class="card-body bg-gradient-warning">
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
<h3 class="p-3 mb-2 bg-gradient-primary text-white">Halaman Tambah Data</h3>
<hr>
<br>
<form method="post" action="<?php echo base_url('Home/proses_tambah_data') ?>" enctype="multipart/form-data">
<div class="form-group row">
    <label for="nis" class="col-sm-1 col-form-label">NIS</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="nis" placeholder="Masukan NIS" name="nis">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
    </div>
  </div>

  <div class="form-group row">
    <label for="kelas" class="col-sm-1 col-form-label">Kelas</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas">
    </div>
  </div>

  <div class="form-group row">
    <label for="hobi" class="col-sm-1 col-form-label">Hobi</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="hobi" placeholder="Masukan Hobi" name="hobi">
    </div>
  </div>

  <div class="form-group row">
    <label for="telepon" class="col-sm-1
    col-form-label">Telepon</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="telepon" placeholder="Masukan telepon" name="telepon">
    </div>
  </div>

  <div class="form-group row">
    <label for="agama" class="col-sm-1 col-form-label">Agama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="agama" placeholder="Masukan Agama" name="agama">
    </div>
  </div>

  <div class="form-group row">
    <label for="foto" class="col-sm-1 col-form-label">Foto</label>
    <div class="col-sm-4">
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
  </div>

  <div class="form-group row">
    <label for="submit" class="col-sm-1 col-form-label"></label>
    <div class="col-sm-4">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
  <br>
 <a  href="<?php echo base_url('Home/index');?>">Kembali ke Data</a>

  </form>
</div>
</div>
</div>
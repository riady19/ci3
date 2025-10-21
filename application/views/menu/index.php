

          <!-- Begin Page Content -->
          <div class="container">
            <!-- Page Heading -->
           
            <h1 class="h3 mb-4 text-danger"><?= $title; ?></h1>

       

          <div class="row">
          <div class="col-lg-6">

          <?= form_error('menu', '<div class="alert alert-danger" role="alert">','
</div>'); ?>

<?= $this->session->flashdata('message'); ?>

          <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
    <?php foreach($menu as $m): ?>
    <tr>
      <th scope="row"><?php echo $no++;?></th>
      <td><?php echo $m['menu']; ?></td>
      <td>
      <a href="" class="badge badge-success mb-3" data-toggle="modal" data-target="#newEditModal<?php echo $m['id']; ?>">Edit</a>
      
       <!--Hapus Data-->
    <a href="<?php echo base_url() ?>menu/hapus_data/<?php echo $m['id']; ?>" class="badge badge-danger" > Delete</a> 
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

          </div>

          </div>
          
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->


<!-- Modal Tambah -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Menu/addmenu'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
    <input type="text" class="form-control" id="menu" name="menu" placeholder="New Menu" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Menu</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal TAMBAH-->

<!-- Modal EDIT -->
<?php foreach($menu as $m): ?>
<div class="modal fade" id="newEditModal<?php echo $m['id']; ?>" tabindex="-1" aria-labelledby="newEditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newEditModalLabel">Edit Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('menu/editmenu'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $m['id']; ?>">
        <div class="form-group">
    <input type="text" class="form-control" id="menu" name="menu" placeholder="Edit Menu" value="<?php echo $m['menu']; ?>">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit Menu</button>
      </div>
      </form>
        </div>
        </div>
       
        <!-- End Modal EDIT -->
        </div>
        <?php endforeach ; ?>


    
          <!-- Begin Page Content -->
          <div class="container">
            <!-- Page Heading -->
           
            <h1 class="h3 mb-4 text-danger"><?= $title; ?></h1>

       

          <div class="row">
          <div class="col-lg">
           
          <?= form_error('menu', '<div class="alert alert-danger" role="alert">','
</div>'); ?>

<?= $this->session->flashdata('message'); ?>

          <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
          <table class="table table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col">Icon</th>
      <th scope="col">Active</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
    <?php foreach($subMenu as $sm): ?>
    <tr>
      <th scope="row"><?php echo $no++;?></th>
      <td><?php echo $sm['menu']; ?></td>
      <td><?php echo $sm['title']; ?></td>
      <td><?php echo $sm['url']; ?></td>
      <td><?php echo $sm['icon']; ?></td>
      <td><?php echo $sm['is_active']; ?></td>
      <td>
        <a class="badge badge-success" href="">edit</a>
        <a class="badge badge-danger" href="">delete</a>
      </td>
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


<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div action="<?= base_url('Menu/submenu'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
    <input type="text" class="form-control" id="menu" name="menu " placeholder="Submenu Name">
  </div>
<div class="form-group">
<select name="menu_id" id="menu_id" class="form-control">
    <option value="">Select Menu</option>
    <?php foreach($menu as $m): ?>
<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
        <?php endforeach ; ?>
    </select>
</div>
<div class="form-group">
    <input type="text" class="form-control" id="url" name="url " placeholder="Submenu url">
  </div>
</div>
<div class="form-group">
<div class="form-group">
    <input type="text" class="form-control" id="icon" name="icon " placeholder="Submenu Icon">
  </div>
  <div class="form-check">
    <input class="form-check-input"  type="checkbox" value="1" name="is_active" id="is_active" checked>
    <label class="form-check-label" for="is_active">
        Active ?
    </label>
      
    </div>
    
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
        

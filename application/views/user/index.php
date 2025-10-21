 <!-- Begin Page Content -->
 <div class="container">
            <!-- Page Heading -->
    
            <h1 class="h3 mb-4 text-primary"><?= $title ;?></h1>
          </div>
          <!-- /.container-fluid -->
       

            <div class="card mb-3" style="max-width: 700px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('./files/img/profile/') . $user['image']; ?>" style="height: 200px; width: 200px; padding:6px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['name']; ?></h5>
        <p class="card-text"><?= $user['email']; ?></p>
        <p class="card-text"><small class="text-muted">Member Since: <?= date('d F Y', $user['date_created']); ?></small></p>
      </div>
    </div>
  </div>
</div>
          </div>
          <!-- /.container-fluid -->
        </>
        <!-- End of Main Content -->
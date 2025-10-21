
    <h3 class="ml-3"><?= $title;?></h3>

     <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
                
              <div class="col-xl-3 col-md-6 mb-4 ml-3">
                <div class="card border-left-primary shadow h-100 py-2 bg-gradient-ligth">
                  <div class="card-body bg-white">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                       
                        <div
                          class="text-x3 font-weight-bold text-gray-800 text-uppercase mb-1"
                        >
                      
                          Jumlah Data:
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                      <p><?php echo $count; ?> 
                    Data</p>
                    
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-database fa-2x text-gray-600"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2 bg-gradient-primary">
                  <div class="card-body bg-gradient-primary">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-x3 font-weight-bold text-white text-uppercase mb-1"
                        >
                          Jumlah User :
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800 text-white">
                          <p><?php echo $count_user; ?> Orang</p>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              
          

            <!-- Content Row -->


    <div class="container">
<div class="row row-cols-1 row-cols-md-4">
  
    <?php foreach($siswa as $sis): ?>
  <div class="col mb-4">
    <div class="card bg-dark">
      <img src="<?= base_url('./gambar/') . $sis['foto'];?>" class="card-img-top img-thumbnail"  alt="..." style="height: 200px;">
      <div class="card-body text-center">
        <h5 class="card-title text-white"> Nama: <?= $sis['nama'];?></h5>
        <p class="card-text text-white">NIS: <?= $sis['nis'];?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
    </div>
</div>
</div>

<!-- Paginitation -->
<nav aria-label="Search results pages">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
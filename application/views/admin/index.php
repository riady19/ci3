

          <!-- Begin Page Content -->
          <div class="container">
            <div class="row-lg">
          <div class="col-lg">
  

        <div class="card shadow">
           <div class="card-header">
               <div class="m-0 font-weight-bold text-primary"> <h3><?= $title;?></h3>
  
  
  <?php foreach ($siswa as $sis): ?>
<div class="container">
         <div class="card">
          <div class="row justify-conten-center md-5">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4 justify-inline">
                  
                  <img src="<?php echo base_url() . './gambar/' . $sis['foto']; ?>" class="card-img-top" style="display: inline-block;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $sis['nama'];?></h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                </div>
                </div>
                </div>
          </div>
          <?php endforeach ; ?>
      </div>      
          </div>

            </div>
                       </div>
                       </div>
                     </div>
                       
                      
                 
             


        
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        

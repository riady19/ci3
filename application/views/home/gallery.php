<!-- Start Gallery -->
 <br>
 <br>
<section id="gallery">
<h3><a class="nav-link text-center text-white p-3" href="<?= base_url('home/gallery') ;?>">Gallery</a></h3>
	<div class="container">
<div class="row row-cols-1 row-cols-md-4">
    <?php foreach($siswa as $sis): ?>
  <div class="col mb-4">
    <div class="card bg-dark ms-auto">
	
      <img src="<?= base_url('./gambar/') . $sis['foto'];?>" class="col-img-top img-thumbnail"  alt="..." style="height: 200px;">
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
</section>
<!-- End Gallery -->
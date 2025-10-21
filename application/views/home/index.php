

<!-- Start Jumbotroon -->

<section id="home" class="jumbotron text-light mt-3 text-center">
<img src="<?= base_url('gambar/fotoku.jpeg');?>"  class="img-thumbnail rounded-circle wow animate__slideInDown" data-wow-duration="2s" alt="" width="200" >
  <h1 class="display-4 wow animate__slideInRight" data-wow-duration="2s">Belajar Ci3</h1>
  <p class="lead wow animate__slideInLeft" data-wow-duration="2s">Selamat datang di belajar Codeigneter 3 | Riadi@2025</p>
  <p class="lead wow animate__slideInLeft" data-wow-duration="2s">Bangun Website CRUD dengan menggunakan codeigneter 3, Bootstrap dan php</p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1d1c1c" fill-opacity="1" d="M0,0L80,21.3C160,43,320,85,480,117.3C640,149,800,171,960,160C1120,149,1280,107,1360,85.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>

</section>
<!-- End Jombotroon -->

<!-- About -->
<section id="about">
	<div class="container">
		<div class="row text-light text-center mt-2 wow animate__fadeInLeft" data-wow-duration="2s">
			<div class="col">
				<h2>About</h2>
			</div>
		</div>
		<div class="row text-light justify-content-center fs-5 text-center mt-4">
			<div class="col-md-4 wow animate__fadeInLeft" data-wow-duration="2s">
<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi labore magnam aperiam vitae sapiente ratione architecto ipsum ea facilis maiores?</p>
		</div>
		<div class="col-md-4 wow animate__fadeInRight" data-wow-duration="2s">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quia iusto voluptates eos totam repellendus.</p>

		</div>
	</div>
	
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff5500" fill-opacity="1" d="M0,32L80,64C160,96,320,160,480,170.7C640,181,800,139,960,112C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>

<!-- end Aboat -->


<!-- Start Gallery -->
<section id="karyawan">
<h3><a class="nav-link text-center text-white p-3" href="<?= base_url('home/gallery') ;?>">Data Siswa</a></h3>
	<div class="container">
<div class="row row-cols-1 row-cols-md-4" >
    <?php foreach($siswa as $sis): ?>
  <div class="col mb-4">
    <div class="card bg-dark ms-auto">
	<!-- wow animate__flipInY" data-wow-duration="2s" -->
      <img src="<?= base_url('./gambar/') . $sis['foto'];?>" class="col-img-top img-thumbnail wow animate__flipInY" data-wow-duration="2s" alt="..." style="height: 200px;">
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

<!-- start conctact -->
<form method="post" action="<?= base_url('pesan/addpesan') ?>" enctype="multipart/form-data">
<section id="contact" class="contact text-white mt-3 ">
	<div class="container">
		<div class="row">
			<div class="col">
					<h3 class="text-center mb-4">Contact</h3>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6">
				<form>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
  <label for="pesan" class="form-label">Pesan</label>
  <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
</div>

  <button type="submit" class="btn btn-primary mb-4">Kirim</button>
</form>
				</div>
			</div>
	</div>
	</div>
</section>
<!-- end Contact -->

<!-- LIVE CHat -->

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="96f8504b-4be4-49c6-ae98-ef10e428ed5c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>

<!-- Footer -->
 <div class="card bg-dark">
<footer class="text-center bg-dark text-white mt-4">
<p>Create by <a href="#"></a>| Riadi@2025</p>

</footer>
</div>
<!-- end Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- wow JS -->
    <script src="<?= base_url('js/wow.min.js') ;?>"></script>
              <script>
              new WOW().init();
              </script>
	<!-- end Wow Js -->
   
  </body>
</html>
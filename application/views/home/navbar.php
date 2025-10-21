<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url('css/style.css') ;?>">

<!-- animated css -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="<?= base_url('css/animate.css');?>">

    <title>Belajar CI3 | Riadi@2025</title>
  </head>
  <br>
	<!-- Start Nav Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4 fixed-top wow animate__flipInX" data-wow-duration="2s">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('home')?>">Belajar CI3</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url('home/index') ;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#karyawan">Data Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class= "btn btn-outline-primary rounded-3" type="submit"  href="<?= base_url("auth");?>">Login</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

<!-- End Nav Bar -->
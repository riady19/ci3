<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <h3>PESAN MASUK</h3>
<table class="table table-bordered">


<?php foreach($pesan as $ps) : ?>
<tr>
          <i class="text-danger">Nama Lengkap :</i>  <?php echo $ps['nama']; ?> <br />
         <i class="text-danger">Email :</i>  <?php echo $ps['email']; ?> <br />
         <i class="text-danger">Pesan Masuk :</i> <?php echo $ps['pesan']; ?>  <br />
         
</tr>
<br>
  <?php endforeach ; ?>
</table>
</div>
</div>

</body>
</html>
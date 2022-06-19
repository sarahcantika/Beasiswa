<?php 
	require 'function.php';
$beasiswa =	query("SELECT * FROM mahasiswa");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
	<title>tabelbeasiswa</title>
</head>
<body>
	<nav>
    <div class="container">
     <ul class="nav nav-tabs">
      <li class="nav-item">
        <h2 class="nav-item">Cinta Cita</h2>
      </li>
      <li class="nav-item ms-auto">
        <a class="nav-link" href="">Logout</a>
      </li>
    </ul> 
    </div>
  </nav>
  <div class="container text-center">
  <h2>Daftar Beasiswa</h2>
<table class="table table-bordered border-dark">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">TTL</th>
      <th scope="col">Ipk</th>
      <th scope="col">Jumlah Saudara</th>
      <th scope="col">Asal Instansi</th>
      <th scope="col">pemberitahuan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    	<?php $i = 1; ?>
    	<?php foreach( $beasiswa as $baris ) : ?>
    <tr>
    	<td><?= $i;?></td>
		<td><?= $baris["nama"]; ?></td>
    	<td><?= $baris["ttl"]; ?></td>
    	<td><?= $baris["ipk"]; ?></td>
    	<td><?= $baris["saudara"]; ?></td>
      <td><?= $baris["asal"]; ?></td>
    	<td>pendaftaran anda sedang diproses</td>
    	<td>
    	<a class="btn btn-warning" href="update_data.php?id=<?= $baris["id"]; ?>">edit</a>
    	<a class="btn btn-danger" href="hapus_data.php?id=<?= $baris["id"]; ?>">hapus</a>
    	</td>
    </tr>
   <?php $i++; ?>
<?php endforeach; ?>
  </tbody>
</table>
<div>
  <a class="btn btn-primary" href="tambah_data.php">Tambah</a>
  <a class="btn btn-primary" href="beranda.php">Kembali</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php 

require 'function.php';

$id = $_GET["id"];

$bea = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST["submit"]) ) { 


if( edit($_POST) > 0 ) {
  echo "<script>
  alert('data berhasil diubah!');
  document.location.href = 'tabel_beasiswa.php';
  </script>";
  }

else {
  echo "<script>
  alert('data gagal diubah!');
  document.location.href = 'tabel_beasiswa.php';
  </script>";
  }


}

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
	<title></title>
</head>
<body>
  
  <div class="container text-center">
  <h2>Edit Beasiswa</h2><br><br>

<form action="" method="post">

      <input type="hidden" name="id" value="<?=$bea['id'] ?>">
    
    <div class="col-auto">
      <label for="nama" class="col-from-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" required value="<?=$bea["nama"] ?>">
    </div>
    
    <div class="col-auto">
      <label for="ttl" class="col-from-label">TTL</label>
      <input type="text" class="form-control" id="ttl" name="ttl" required value="<?= $bea["ttl"]; ?>">
    </div>
<br>
 <div class="col-auto">
      <label for="ipk" class="col-from-label">Ipk</label>
      <input type="text" class="form-control" id="ipk" name="ipk" required value="<?= $bea["ipk"]; ?>">
    </div>
  <br>
  <div class="col-auto">
    <label for="saudara" class="col-from-label">Jumlah Saudara</label>
    <input type="text" class="form-control" id="saudara" name="saudara" required value="<?= $bea["saudara"]; ?>">
  </div>
  <div class="col-auto">
    <label for="asal" class="col-from-label">Asal Instansi</label>
    <input type="text" class="form-control" id="asal" name="asal" required value="<?= $bea["asal"]; ?>">
  </div>

  <br>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
  <a href="tabel_beasiswa.php" class="btn btn-warning">Kembali</a>
  </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</div>
</body>
</html>
<?php 
$conn = mysqli_connect("localhost","root","","beasiswa");

function query($query){

global $conn;
$result = mysqli_query($conn,$query);
$kotak = [];

while( $baris = mysqli_fetch_assoc($result) ) {

	$kotak[] = $baris;
}
return $kotak;
}

function tambah($data){

global $conn;
$nama = htmlspecialchars($data["nama"]);
$ttl = htmlspecialchars($data["ttl"]);
$ipk = htmlspecialchars($data["ipk"]);
$saudara = htmlspecialchars($data["saudara"]);
$asal = htmlspecialchars($data["asal"]);

$query = "INSERT INTO mahasiswa VALUES('','$nama','$ttl','$ipk','$saudara','$asal')";
mysqli_query($conn, $query);


return mysqli_affected_rows($conn);
}


function hapus($id){
	global $conn;
	$query = "DELETE FROM mahasiswa WHERE id = $id";
	mysqli_query($conn, $query);
	
return mysqli_affected_rows($conn);
}


function edit($data){

global $conn;
$id = $data["id"];
$nama = htmlspecialchars($data["nama"]);
$ttl = htmlspecialchars($data["ttl"]);
$ipk = htmlspecialchars($data["ipk"]);
$saudara = htmlspecialchars($data["saudara"]);
$asal = htmlspecialchars($data["asal"]);

$query = "UPDATE mahasiswa SET
		nama = '$nama',
		ttl = '$ttl',
		ipk = '$ipk',
		saudara = '$saudara',
		asal = '$asal'	
			WHERE id = $id	";
mysqli_query($conn, $query);


return mysqli_affected_rows($conn);
}

 
 ?>

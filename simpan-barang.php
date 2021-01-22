<?php
include "koneksi.php";
$id_film=$_POST["id_film"];
$nama_film=$_POST["nama_film"];
$Sipnosis=$_POST["Sipnosis"];
$Rating=$_POST["Rating"];
$id_genre=$_POST["id_genre"];
$id_batasan=$_POST["id_batasan"];
$Tahun=$_POST["Tahun"];
$writers=$_POST["writers"];
$directors=$_POST["directors"];
$pemeran=$_POST["pemeran"];
$id_studio=$_POST["id_studio"];
$id_jadwal=$_POST["id_jadwal"];
$id_kategori=$_POST["id_kategori"];
$Harga=$_POST["Harga"];
$image=$_POST["image"];





  $sql="insert into film (id_film,nama_film,Sipnosis,Rating,id_genre,id_batasan,Tahun,writers,directors,pemeran,id_studio,id_jadwal,id_kategori,Harga,image) values
		('$id_film','$nama_film','$Sipnosis','$Rating','$id_genre','$id_batasan','$Tahun','$writers','$directors','$pemeran','$id_studio','$id_jadwal','$id_kategori','$Harga','$image')";


  $hasil=mysqli_query($kon,$sql);


  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>
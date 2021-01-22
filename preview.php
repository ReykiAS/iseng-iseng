<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Film</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
         $conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
		mysqli_select_db($conn,"nobar_xxi1");
		$hasil = mysqli_query($conn,"select * from film a inner join genre b on a.id_genre=b.id_genre inner join film f inner join batasan_usia g on f.id_batasan =  g.id_batasan inner join film y inner join studio z on y.id_studio = z.id_studio inner join film v inner join jadwal w on v.id_jadwal = w.id_jadwal inner join film q inner join kategori l on q.id_kategori = l.id_kategori limit 15 ");
                            
                        
		
	echo '<table border=\"12\">
		<thead>
		<tr style="background-color: white;">
			<th>id_film</th> </center>
			<th>nama_film</th>
			<th>Sipnosis</th>
			<center> <th>rating</th></center> 
			<th>genre</th>
			<th>batasan</th>
			<th>Tahun</th>
			<th>penulis</th>
			<th>direktor</th>
			<th>pemeran</th>
			<th>studio</th>
			<th>jam mulai</th>
			<th>jam berakhir</th>
			<th>kategori</th>
			<th>harga</th>
			<th>image</th>
		</tr>
	</thead>
	<tbody>';

	while ($row=mysqli_fetch_array($hasil)) {
	echo '<tr>
			<td> '.$row['id_film'].'</td>
			<td>'.$row['nama_film'].'</td>
			<td>'.$row['Sipnosis'].'</td>
			<td>'.$row['Rating'].'</td>
			<td>'.$row['nama_genre'].'</td>
			<td>'.$row['nama_batasan'].'</td>
			<td>'.$row['Tahun'].'</td>
			<td>'.$row['writers'].'</td>
			<td>'.$row['directors'].'</td>
			<td>'.$row['pemeran'].'</td>
			<td>'.$row['nama_studio'].'</td>
			<td>'.$row['jam_mulai'].'</td>
			<td>'.$row['jam_berakhir'].'</td>
			<td>'.$row['nama_kategori'].'</td>
			<td>'.$row['Harga'].'</td>
			<td>'.$row['image'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';
	?>

</body>
</html>
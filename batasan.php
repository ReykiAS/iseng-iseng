<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Film</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
</header>
<div class="menu">
		<ul>
			<li><a href="home.php?page=home">HOME</a></li>
			<li><a href="film.php?page=film">Film</a></li>
			<li><a href="karyawan.php?page=karyawan">karyawan</a></li>
			<li><a href="batasan.php?page=batasan_usia">batasan usia</a></li>
		</ul>
	</div>
<?php
	$conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
		mysqli_select_db($conn,"nobar_xxi1");
		$hasil = mysqli_query($conn,"select * from batasan_usia ");
		
	echo '<table border=\"0\">
		<thead>
		<tr style="background-color: white;">
			<th>id_batasan</th> </center>
			<th>Kategori umur</th>
		</tr>
	</thead>
	<tbody>';

	while ($row=mysqli_fetch_array($hasil)) {
	echo '<tr>
			<td> '.$row['id_batasan'].'</td>
			<td>'.$row['nama_batasan'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';
	?>

</body>
</html>
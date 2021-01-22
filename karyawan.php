<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Film</title>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="F/nobar21.png">
</head>
<body>
	<div class ="background" 
</header>

<?php
	$conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
		mysqli_select_db($conn,"nobar_xxi1");
		$hasil = mysqli_query($conn,"select * from pegawai ");
		
	echo '<table border=\"0\">
		<thead>
		<tr style="background-color: white;">
			<th>NIP</th> </center>
			<th>nama Pegawai</th>
			<th>Tempat</th>
			<center> <th>Tanggal Lahir</th></center> 
		</tr>
	</thead>
	<tbody>';

	while ($row=mysqli_fetch_array($hasil)) {
	echo '<tr>
			<td> '.$row['NIP'].'</td>
			<td>'.$row['Nama_Peg'].'</td>
			<td>'.$row['Tempat'].'</td>
			<td>'.$row['Tanggal_Lahir'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';
	?>
	</div>
</body>
</html>
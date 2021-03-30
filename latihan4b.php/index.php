<?php
// Untuk Melakukan Koneksi Ke Database
require 'php/function.php';
//Melakukan QUery Dari Database
$mahasiwa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan4b</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<center>
		<table class="tabel1">
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Nrp</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>	
			<?php  
			
			
			$i = 1?>
			<?php foreach ($mahasiwa as $mhs ) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $row["img"]; ?>"></td>
					<td><?= $mhs["nrp"] ?></td>
					<td><?= $mhs["nama"]?></td>
					<td><?= $mhs["email"]?></td>
					<td><?= $mhs["jurusan"]?></td>
				</tr>
				<?php $i++ ?>
			<?php endforeach; ?>
		</table>
		</center>

	</div>
</body>
</html>
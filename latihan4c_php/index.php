  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
// Untuk Melakukan Koneksi Ke Database
require 'function.php';
//Melakukan QUery Dari Database
$mahasiswa = query("SELECT * FROM mahasiswa")
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan4c</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<?php foreach ($mahasiswa as $mhs )
		: ?>
		<a href="detail.php?id=<?= $mhs['id']?>"><?= 
			$mhs["nama"] ?>
		<p class="nama">
			</a>
		</p>
	<?php endforeach; ?>
	</div>
</body>
</html>
			
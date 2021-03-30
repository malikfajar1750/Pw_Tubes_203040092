  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
// Untuk Melakukan Koneksi Ke Database
$conn=mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040092");
//Melakukan QUery Dari Database
$result = mysql_query($conn, "SELECT * FROM mahasiswa"); 
?>
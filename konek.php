<?php
$konek = mysqli_connect("127.0.0.1", "", "", "db_sakuci");

if (!$konek) die("Koneksi Gagal: " . mysqli_connect_error());
else echo "Koneksi Berhasil";
?>
<?php
$konek = mysqli_connect("", "", "", "db_sakuci");

if (!$konek) die("Koneksi Gagal: " . mysqli_connect_error());
else echo "Koneksi Berhasil";
?>
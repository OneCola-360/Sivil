<?php
$konek = mysqli_connect("127.0.0.1", "root", "", "db_sakuci");

if (!$konek): 
    die("Koneksi Gagal: " . mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .koneksi {
                position: absolute;
                right: 0;
                bottom: 0;
                color: #ccc;
            }
        </style>
    </head>
    <body>
        <?php else: ?>
            <div class="koneksi"><?= "Koneksi Berhasil"; ?></div>
        <?php endif; ?>
    </body>
</html>
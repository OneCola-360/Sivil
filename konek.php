<?php
$konek = mysqli_connect("127.0.0.1", "root", "", "db_sakuci");
?>
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .koneksi {
                position: absolute;
                right: 0px;
                bottom: 0px;
                color: #ccc;
            }
            .gagal {
                position: absolute;
                right: 0px;
                bottom: 0px;
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <?php if(!konek): ?>
            <div class="gagal"><?= die("Koneksi Gagal: " . mysqli_connect_error()); ?></div>
        <?php else: ?>
            <div class="koneksi"><?= "Koneksi Berhasil"; ?></div>
        <?php endif; ?>
    </body>
</html>
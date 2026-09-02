<?php 
require("../konek.php");
$role = $_POST["role"];
if ($role = "admin"):

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil ditambahkan</h3>
                </div>
                <div class="card-body">
                    <form action="../create_new/akun_input.php">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
endif;
if ($role = "siswa"):


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php if (in_array($user_id, $dbsiswa) && in_array($username, $dbsiswa) && in_array($password, $dbsiswa)): ?>
            <div class="container mt-5" style="width=50%">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Data berhasil ditambahkan</h3>
                    </div>
                    <form action="../create_new/siswa_input.php">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="container mt-5" style="width=50%">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Data gagal ditambahkan</h3>
                    </div>
                    <div class="card-body">
                        <h3>Akun tidak ditemukan</h3>
                        <form action="../create_new/users_input.php">
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Buat Baru</button>
                            </div>
                        </form>
                        <form action="../create_new/siswa_input.php">
                            <div class="mb-3">
                                <button class="btn btn-secondary" type="submit">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>

<?php 
endif;
if ($role = "guru"):

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php if (in_array($user_id, $dbusers) && in_array($username, $dbusers) && in_array($password, $dbusers)): ?>
            <div class="container mt-5" style="width=50%">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Data berhasil ditambahkan</h3>
                    </div>
                    <form action="../create_new/siswa_input.php">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="container mt-5" style="width=50%">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Data gagal ditambahkan</h3>
                    </div>
                    <div class="card-body">
                        <h3>Akun tidak ditemukan</h3>
                        <form action="../create_new/users_input.php">
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Buat Baru</button>
                            </div>
                        </form>
                        <form action="../create_new/guru_input.php">
                            <div class="mb-3">
                                <button class="btn btn-secondary" type="submit">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>
<?php endif; ?>
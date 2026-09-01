<?php 
require("../konek.php");

$nis = $_POST["nis"] ?? "nn";
$nama = $_POST["nama"] ?? "nn";
$kelas = $_POST["kelas"] ?? "nn";
$jk = $_POST["jk"] ?? "nn";
$username = $_POST["username"] ?? "nn";
$user_id = $_POST["id"] ?? "nn";
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

if ($username !== "nn" || $role !== "nn" || $password !== "nn" || !in_array($nis, $dbsiswa) || $nama !== "nn" || $kelas !== "nn" || $jk!== "nn") {
    $dbsiswa = mysqli_fetch_all(mysqli_query($konek, "SELECT id, username, password, role FROM users"), MYSQLI_ASSOC);
    $sqlid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM siswa"), MYSQLI_ASSOC);
    $id =  count($sqlid);
    if (in_array($user_id, $dbsiswa) && in_array($username, $dbsiswa) && in_array($password, $dbsiswa)) {
        mysqli_query($konek, "INSERT INTO siswa (id, nis, nama, kelas, jenis_kelamin, user_id) VALUES (" . $id . $nis . $nama . $kelas . $jk . $user_id . ")");
    }
} else return;
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
                        <button class="btn btn-primary" type="submit">Kembali</button>
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
                            <button class="btn btn-primary" type="submit">Buat Baru</button>
                        </form>
                        <form action="../create_new/siswa_input.php">
                            <button class="btn btn-secondary" type="submit">Kembali</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>
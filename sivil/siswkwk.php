<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="width=50%">
    <div class="card shadow">
        <div class="card-header">
            <h3>Form Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <h4>Data Profil Siswa</h4>
            <hr>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Siswa</label>
                    <input type="text" class="form-control" name="nis" placeholder="Contoh: 12345678">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap Siswa</label>
                    <input type="text" class="form-control" name="nama" placeholder="Contoh: Ujang A">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas Siswa</label>
                    <input type="text" class="form-control" name="kelas" placeholder="Contoh: XI-RPL-1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" id="laki">
                        <label class="form-check-label" for="laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <hr>
                <h4>Data Kredensial Akun</h4>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <div class="mb-3">
                    <button type="submit">Simpan</button>
                    <button type="reset">Kembali</button>
                </div>
            </form>
        </div>
    </div>
    <?php 
    $nis = $_POST["nis"] ?? "undefined";
    $nama = $_POST["nama"] ?? "undefined";
    $kelas = $_POST["kelas"] ?? "undefined";
    $jk = $_POST["jk"] ?? "undefined";
    $username = $_POST["username"] ?? "undefined";
    $email = $_POST["email"] ?? "undefined";
    ?>
    <div class="card shadow">
        <div class="card-header">
            <h3>Hasil Input Siswa</h3>
        </div>
        <div class="card-body">
            <b>NIS: </b><?= $nis ?><br>
            <b>Nama: </b><?= $nama ?><br>
            <b>Kelas: </b><?= $kelas ?><br>
            <b>Jenis Kelamin: </b><?= $jk ?><br>
            <b>Username: </b><?= $username ?><br>
            <b>Email: </b><?= $email ?><br>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

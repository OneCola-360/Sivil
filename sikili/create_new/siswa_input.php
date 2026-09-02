<?php require("../konek.php"); ?>
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
            <form action="../aksi/aksi_siswa.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Siswa</label>
                    <input type="number" class="form-control" name="nis" placeholder="Contoh: 12345678" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap Siswa</label>
                    <input type="text" class="form-control" name="nama" placeholder="Contoh: Ujang A" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas Siswa</label>
                    <input type="text" class="form-control" name="kelas" placeholder="Contoh: XI-RPL-1" required>
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
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Id</label>
                    <input type="number" class="form-control" name="id" placeholder="Masukkan ID Akun" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" value="siswa" style="display: none;" name="role" id="role">
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

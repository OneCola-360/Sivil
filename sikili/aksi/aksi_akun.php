<?php 
require("../konek.php");

$username = $_POST["username"] ?? "nn";
$role = $_POST["role"] ?? "nn";
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

if ($username !== "nn" || $role !== "nn" || $password !== "nn") {
    $sqlid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM users"), MYSQLI_ASSOC);
    $id =  count($sqlid) + 1;

    mysqli_query($konek, "INSERT INTO users (id, username, password, role) VALUES (" . $id . ",'" . $username . "','" . $password . "','" . $role . "')");
} else return;
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
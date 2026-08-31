<?php
include("konek.php");

$sql = "SELECT * FROM users;";

$usersql = mysqli_query($konek, $sql);

$user = mysqli_fetch_all($usersql, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Tabel Users</h2>
                    <table id="tabelUser" class="table table-striped table-hover border">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Role</th>
                                <th scope="col" style="width: 20%;">Created At</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php if (count($user) > 0): ?>
                                <?php for($i = 0; $i < count($user); $i++): ?>
                                    <tr>
                                        <td><?php $j = $i + 1; echo $j; ?></td>
                                        <td><?= $user[$i]['id']; ?></td>
                                        <td><?= $user[$i]['username']; ?></td>
                                        <td><?= $user[$i]['password']; ?></td>
                                        <td><?= $user[$i]['role']; ?></td>
                                        <td><?= $user[$i]['created_at']; ?></td>
                                    </tr>
                                <?php endfor; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6">Data Belum Di Isi</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
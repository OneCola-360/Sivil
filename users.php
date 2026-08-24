<?php
include("konek.php");

$usersql = mysqli_query($konek, "SELECT * FROM `users`");

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
                <h2>Users</h2>
                <div class="col-md-10">
                    <table id="tabelUser" class="table table-striped table-hover border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($user) > 0): ?>
                                <?php foreach( $user as $key ): ?>
                                    <tr>
                                        <td><?= $key['id']; ?></td>
                                        <td><?= $key['username']; ?></td>
                                        <td><?= $key['password']; ?></td>
                                        <td><?= $key['role']; ?></td>
                                        <td><?= $key['created_at'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Data Belum Di Isi</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
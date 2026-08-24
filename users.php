<?php
include("konek.php");

$usersql = mysqli_query($konek, "SELECT * FROM `users`");

$user = mysqli_fetch_all($usersql, MYSQLI_ASSOC);

?>

<h2>Users</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Created At</th>
    </tr>
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
</table>
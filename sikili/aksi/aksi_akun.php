<?php 
require("../konek.php");

$username = $_POST["username"] ?? "nn";
$role = $_POST["role"] ?? "nn";
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

if ($username !== "nn" || $role !== "nn" || $password !== "nn") {
    $sqlid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM users"), MYSQLI_ASSOC);
    $id =  count($sqlid);

    mysqli_query($konek, "INSERT INTO users (id, username, password, role) VALUES (" . $id . $username . $password . $role . ")");
} else return;
?>
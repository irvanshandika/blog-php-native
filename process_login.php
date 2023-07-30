<?php
session_start();
$_SESSION['sesi'] = null;

include_once 'koneksi.php';

if ($_POST['submit']) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    $sesi = mysqli_fetch_array($query);

    if (@$sesi['id_admin']) {
        $_SESSION['id_admin'] = $sesi['id_admin'];
        $_SESSION['sesi'] = $sesi['nama_admin'];
        $_SESSION['nama_admin'] = $sesi['nama_admin'];

        echo "<script>alert('Anda Berhasil Login!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=dashboard.php">';
    } else {
        echo "<script>alert('Anda Gagal Login!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=login.php">';
    }
} else {
    include_once 'dashboard.php';
}

<?php
include "../../koneksi.php";

$idposts = $_POST['idposts'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];


// Insert  
if (@$_POST) {

    $query = "INSERT INTO posts (idposts, judul, konten, kategori, penulis) VALUES ('$idposts', '$judul', '$konten', '$kategori', '$penulis')";
}

// Update
if (@$_POST['id']) {
    $query = "UPDATE posts SET 
                idposts = '$idposts', 
                judul = '$judul', 
                konten = '$konten', 
                kategori = '$kategori',
                penulis = '$penulis'
                    WHERE id = '$_POST[id]'";
}
// Delete
if (@$_GET['id']) {
    $query = "DELETE FROM posts WHERE id = '$_GET[id]'";
}
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: /dashboard/posts");
}

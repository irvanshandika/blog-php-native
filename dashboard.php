<?php
session_start();

// Cek apakah sudah login atau belum
if (!isset($_SESSION['id_admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irvan Blog - Dashboard</title>
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.min.css">
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-96 p-8 bg-white rounded shadow-lg">
        <h1 class="text-2xl font-semibold mb-4">Selamat datang, <?php echo $_SESSION['nama_admin']; ?></h1>
        <a class="block w-full py-2 px-4 bg-blue-500 text-white rounded-lg text-center hover:bg-blue-600" href="logout.php">Logout</a>
    </div>
    <script src="./src/script/script.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
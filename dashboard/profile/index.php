<?php
session_start();

// Cek apakah sudah login atau belum
if (!isset($_SESSION['id_admin'])) {
    header("Location: /restrict");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irvan Blog - User</title>
    <link rel="stylesheet" href="../../src/style/style.css">
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="stylesheet" href="../../node_modules/flowbite/dist/flowbite.min.css">
</head>

<body class="bg-gray-700">
    <?php
    include '../../src/components/sidebar.php';
    ?>
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="flex justify-center">
                <div class="block max-w-sm p-6  border rounded-lg shadow bg-gray-800 border-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Noteworthy technology acquisitions 2021</h5>
                    <p class="font-normal text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </div>
        </div>
        <?php
        include_once '../../src/components/footer.php';
        ?>
    </div>
    <script src="../../src/script/script.js"></script>
    <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once '../koneksi.php';

    $query = "SELECT * FROM posts";
    $data_posts = mysqli_query($koneksi, $query);
    if (!empty($data_posts)) {
        # code...
        foreach ($data_posts as $key => $value) {
            # code...
    ?>
            <title><?= $value['judul'] ?></title>
    <?php
        }
    }
    ?>
    <link rel="stylesheet" href="/src/style/style.css">
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/node_modules/flowbite/dist/flowbite.min.css">
    <link rel="stylesheet" href="/node_modules/quill/dist/quill.snow.css">
</head>

<body class="bg-gray-700">
    <?php
    include_once '../src/components/navbar.php'
    ?>

    <?php

    if (isset($_GET['id'])) {
        $no = $_GET['id'];
        $query = "SELECT * FROM posts WHERE id = $no";
        $data_posts = mysqli_query($koneksi, $query);

        if (!empty($data_posts)) {
            $value = mysqli_fetch_assoc($data_posts);
    ?>
            <div class="flex justify-center mt-8 lg:mx-4">
                <div class="block max-w-[1000px] p-6 border rounded-lg shadow bg-gray-800 border-gray-700">
                    <h1 class="text-center text-lg lg:text-2xl mt-8 text-white"><?= $value['judul'] ?></h1>
                    <div class="w-full mt-4 max-w-7xl">
                        <div class="flex flex-col items-center font-bold">
                            <div class="flex">
                                <h5 class="lg:text-2xl text-lg font-medium text-white">Penulis: <?= $value['penulis'] ?></h5>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="-bottom-9 ml-2 w-5" viewBox="0 0 48 48">
                                    <polygon fill="#42a5f5" points="29.62,3 33.053,8.308 39.367,8.624 39.686,14.937 44.997,18.367 42.116,23.995 45,29.62 39.692,33.053 39.376,39.367 33.063,39.686 29.633,44.997 24.005,42.116 18.38,45 14.947,39.692 8.633,39.376 8.314,33.063 3.003,29.633 5.884,24.005 3,18.38 8.308,14.947 8.624,8.633 14.937,8.314 18.367,3.003 23.995,5.884"></polygon>
                                    <polygon fill="#fff" points="21.396,31.255 14.899,24.76 17.021,22.639 21.428,27.046 30.996,17.772 33.084,19.926"></polygon>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-lg lg:text-base mt-3 text-center text-white"><?= $value['created_at'] ?></p>
                    <p class="text-lg lg:text-base mt-3 text-center text-white"><?= $value['konten'] ?></p>
                </div>
            </div>
    <?php
        }
    }
    ?>

    <?php
    include_once '../src/components/footer.php'
    ?>
    <script src="/node_modules/quill/dist/quill.js"></script>
    <script src="/node_modules/quill/dist/quill.min.js"></script>
    <script src="/src/script/script.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
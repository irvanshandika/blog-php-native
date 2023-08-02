<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once 'koneksi.php';

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
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.min.css">
</head>

<body>
    <?php
    include_once './src/components/navbar.php'
    ?>

    <?php
    include_once 'koneksi.php';

    $query = "SELECT * FROM posts";
    $data_posts = mysqli_query($koneksi, $query);
    if (!empty($data_posts)) {
        # code...
        foreach ($data_posts as $key => $value) {
            # code...
    ?>
            <h1 class="text-center text-lg lg:text-2xl mt-8"><?= $value['judul'] ?></h1>
            <p class="text-lg lg:text-base mt-3 text-center">Penulis: <?= $value['penulis'] ?></p>
            <p class="text-lg lg:text-base mt-3 text-center"><?= $value['konten'] ?></p>
    <?php
        }
    }
    ?>

    <?php
    include_once './src/components/footer.php'
    ?>
    <script src="./src/script/script.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
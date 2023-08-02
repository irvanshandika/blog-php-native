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
    <title>Irvan Blog - Create Posts</title>
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.min.css">
</head>

<body class="bg-gray-100">
    <?php
    include './src/components/sidebar.php';
    ?>
    <div class="p-4 sm:ml-64">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Buat Postingan</h2>
            <div class="p-4  dark:border-gray-700">
                <?php
                include_once 'koneksi.php';
                if (@$_GET['id']) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM posts WHERE idposts = '$id'";
                    $data_posts = mysqli_query($koneksi, $query);
                    $posts = mysqli_fetch_array($data_posts);
                }
                ?>
                <form action="posts-function.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= @$posts['id'] ?>" />
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="idposts" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Posts</label>
                            <input type="text" name="idposts" id="idposts" value="<?= @$posts['idposts'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkin ID Posts" required />
                        </div>
                        <div class="sm:col-span-2">
                            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" name="judul" id="judul" value="<?= @$posts['judul'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkin Judul" required />
                        </div>
                        <div class="sm:col-span-2">
                            <label for="konten" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten</label>
                            <textarea id="konten" name="konten" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkin konten postingan" required><?= @$posts['konten'] ?></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <input type="text" name="kategori" id="kategori" value="<?= @$posts['kategori'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkin jenis kategori" required />
                        </div>
                        <div class="sm:col-span-2">
                            <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                            <input type="text" name="penulis" id="penulis" value="<?= @$posts['penulis'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Penulis" required />
                        </div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                        Posting
                    </button>
                    <a href="posts.php" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-500 rounded-lg focus:ring-4 focus:ring-red-200 hover:bg-red-800">Kembali</a>
                </form>
            </div>
        </div>
        <?php
        include_once './src/components/footer.php';
        ?>
    </div>
    <script src="./src/script/script.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
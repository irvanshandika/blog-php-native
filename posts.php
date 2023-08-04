<?php
session_start();

// Cek apakah sudah login atau belum
if (!isset($_SESSION['id_admin'])) {
    header("Location: restrict.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irvan Blog - Posts</title>
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.min.css">
</head>

<body class="bg-gray-100">
    <?php
    include './src/components/sidebar.php';
    ?>
    <div class="p-4 sm:ml-64">
        <a href="create-posts.php" class="bg-blue-500 hover:bg-blue-700 text-white ml-4 p-2 rounded-lg">Buat Postingan</a>
        <div class="p-4 rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konten
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penulis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dibuat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once 'koneksi.php';
                        $query = "SELECT * FROM posts";
                        $result = mysqli_query($koneksi, $query);

                        if (!empty($result)) {
                            # code...
                            foreach ($result as $key => $value) {
                        ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?= $key + 1 ?></th>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $value['judul'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $value['kategori'] ?>
                                    </td>
                                    <td class="px-6 py-4 line-clamp-4">
                                        <?= $value['konten'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $value['penulis'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $value['created_at'] ?>
                                    </td>
                                    <td class="items-center px-6 py-4 space-x-3">
                                        <a href="create-posts.php?id=<?= $value['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="posts-function.php?id=<?= $value['id'] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
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
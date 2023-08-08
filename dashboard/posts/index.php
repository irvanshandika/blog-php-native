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
    <title>Irvan Blog - Posts</title>
    <link rel="stylesheet" href="/src/style/style.css">
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/node_modules/flowbite/dist/flowbite.min.css">
    <link rel="stylesheet" href="/node_modules/quill/dist/quill.snow.css">
</head>

<body class="bg-gray-700">
    <?php
    include '../../src/components/sidebar.php';
    ?>
    <div class="p-4 sm:ml-64">
        <a href="/dashboard/create-posts" class="bg-blue-500 hover:bg-blue-700 text-white ml-4 p-2 rounded-lg">Buat Postingan</a>
        <div class="p-4 rounded-lg">
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/dashboard" class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-white">
                            <svg class="w-5 h-5 mr-2.5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="/dashboard/posts" class="inline-flex items-center ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M23.5 4h-1.67A3.001 3.001 0 0 0 19 2h-6a3.001 3.001 0 0 0-2.83 2H8.5A3.5 3.5 0 0 0 5 7.5v19A3.5 3.5 0 0 0 8.5 30h5.546a2.49 2.49 0 0 1 .032-1.129l.791-3.051a4.159 4.159 0 0 1 1.01-1.82H11a1 1 0 1 1 0-2h6.86l6.652-6.706A4.36 4.36 0 0 1 27 14.042V7.5A3.5 3.5 0 0 0 23.5 4ZM13 4h6a1 1 0 1 1 0 2h-6a1 1 0 1 1 0-2Zm-3 9a1 1 0 0 1 1-1h10a1 1 0 1 1 0 2H11a1 1 0 0 1-1-1Zm1 4h5a1 1 0 1 1 0 2h-5a1 1 0 1 1 0-2Zm18.652 3.425l-8.613 8.543c-.352.349-.79.598-1.27.721l-3.02.778a1 1 0 0 1-1.218-1.22l.79-3.051c.118-.456.355-.872.687-1.206l8.57-8.64a2.88 2.88 0 1 1 4.074 4.075Z" />
                                </svg>
                                Posts</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-400">
                    <thead class="text-xs uppercase bg-gray-800 text-gray-400">
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
                        include_once '../../koneksi.php';
                        $query = "SELECT * FROM posts";
                        $result = mysqli_query($koneksi, $query);

                        if (!empty($result)) {
                            # code...
                            foreach ($result as $key => $value) {
                        ?>
                                <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white"><?= $key + 1 ?></th>
                                    <td class="px-6 py-4 font-medium whitespace-nowrap text-white">
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
                                    <td class="flex items-center px-6 py-4 space-x-3">
                                        <a href="/dashboard/create-posts?id=<?= $value['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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
        include_once '../../src/components/footer.php';
        ?>
    </div>
    <script src="/node_modules/quill/dist/quill.js"></script>
    <script src="/node_modules/quill/dist/quill.min.js"></script>
    <script src="/src/script/script.js"></script>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irvan Blog - Welcome</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.min.css">
</head>

<body class="bg-gray-700">
    <?php
    include_once './src/components/navbar.php'
    ?>
    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/pertama.png" class="absolute block lg:h-[300px] h-[200px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/kedua.png" class="absolute block lg:h-[300px] h-[200px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/ketiga.png" class="absolute block lg:h-[300px] h-[200px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/keempat.png" class="absolute block lg:h-[300px] h-[200px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/kelima.png" class="absolute block lg:h-[300px] h-[200px] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="flex justify-center mt-8">
        <form method="POST">
            <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" name="pencarian" id="default-search" class="block w-[350px] lg:w-[500px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pencarian kategori, materi, ...">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>

    <!-- Card ui -->

    <div class="flex lg:flex-row flex-col justify-center">
        <?php
        include_once 'koneksi.php';

        $batas = 5;
        extract($_GET);

        if (empty($hal)) {
            $posisi = 0;
            $hal = 1;
            $no = 1;
        } else {
            $posisi = ($hal - 1) * $batas;
            $no = $posisi + 1;
        }

        if (@$_POST['pencarian']) {
            $pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
            if ($pencarian != "") {
                $query = "SELECT * FROM posts WHERE
                    judul LIKE '%$pencarian%'
                    OR kategori like '%$pencarian%'";
                $queryJml = $query;
            } else {
                $query = "SELECT * FROM posts LIMIT $posisi, $batas";
                $queryJml = "SELECT * FROM posts";
            }
        } else {
            $query = "SELECT * FROM posts LIMIT $posisi, $batas";
            $queryJml = "SELECT * FROM posts";
        }

        $data_posts = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($data_posts) > 0) {
            foreach ($data_posts as $key => $value) {

        ?>
                <div class="max-w-sm mt-8 mb-4 mx-4 p-6 rounded-lg shadow bg-gray-800 border-gray-700">
                    <div class="hidden"><?= $no ?></div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white"><?= $value['judul'] ?></h5>
                    <p class="mb-3 font-normal text-gray-400 line-clamp-3">
                        <?= $value['konten'] ?>
                    </p>
                    <p class="mb-3 mt-10"><span class="font-normal text-white bg-blue-500 rounded-lg p-2"><?= $value['kategori'] ?></span></p>
                    <a href="view.php?id=<?= $value['id'] ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            <?php
                $no++;
            }
        } else {
            ?>
            <h1 class="text-center text-white">Data Tidak Ditemukan!</h1>
        <?php
        }
        ?>
    </div>
    <div class="flex justify-center">
        <?php
        if (isset($_POST['pencarian'])) {
            if ($_POST['pencarian'] != '') {
                $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
                echo '<p class="text-white">Data Hasil Pencarian : ' . $jml . '</p>';
            }
        } else {
            $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
            echo '<p class="text-white">Jumlah data : ' . $jml . '</p>';
        }
        ?>
    </div>
    <div class="flex justify-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
                <?php
                $jml_hal = ceil($jml / $batas);
                for ($i = 1; $i <= $jml_hal; $i++) {
                    if ($i != $hal) {
                ?>
                        <li>
                            <a href="index.php?hal=<?= $i ?>" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="index.php?hal=<?= $i ?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?= $i ?></a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li>
                            <a disabled class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?= $i ?></a>
                        </li>
                        <li>
                            <a disabled class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                        <?php
                        ?>
                <?php
                    }
                }
                ?>
            </ul>
        </nav>
    </div>
    <?php
    include_once './src/components/footer.php'
    ?>
    <script src="./src/script/script.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
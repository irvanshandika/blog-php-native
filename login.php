<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irvan Blog - Login</title>
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/flowbite/dist/flowbite.min.css">
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">

    <div class="w-96 p-8 bg-white rounded shadow-lg">
        <h1 class="text-2xl font-semibold mb-4">Login</h1>
        <?php if (isset($login_error) && $login_error) : ?>
            <p class="text-red-500 mb-4">Username atau password salah.</p>
        <?php endif; ?>
        <form method="post" action="process_login.php">
            <div class="mb-4">
                <label class="block text-gray-700" for="username">Username</label>
                <input class="w-full px-4 py-2 rounded-lg border" type="text" name="username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="password">Password</label>
                <input class="w-full px-4 py-2 rounded-lg border" type="password" name="password" required>
            </div>
            <button class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600" type="submit" name="submit" value="submit">Login</button>
        </form>
    </div>

    <script src="./src/script/script.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
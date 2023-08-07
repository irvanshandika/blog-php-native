<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet" />


<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm rounded-lg sm:hidden hog-gray-100 fogcus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <h1 class="text-lg font-semibold text-white"><span id="greetings"></span> <span class=""><?php echo $_SESSION['nama_admin']; ?></span> !</h1>
            </li>
            <li>
                <a href="/dashboard" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-3 font-heebo">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/posts" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M23.5 4h-1.67A3.001 3.001 0 0 0 19 2h-6a3.001 3.001 0 0 0-2.83 2H8.5A3.5 3.5 0 0 0 5 7.5v19A3.5 3.5 0 0 0 8.5 30h5.546a2.49 2.49 0 0 1 .032-1.129l.791-3.051a4.159 4.159 0 0 1 1.01-1.82H11a1 1 0 1 1 0-2h6.86l6.652-6.706A4.36 4.36 0 0 1 27 14.042V7.5A3.5 3.5 0 0 0 23.5 4ZM13 4h6a1 1 0 1 1 0 2h-6a1 1 0 1 1 0-2Zm-3 9a1 1 0 0 1 1-1h10a1 1 0 1 1 0 2H11a1 1 0 0 1-1-1Zm1 4h5a1 1 0 1 1 0 2h-5a1 1 0 1 1 0-2Zm18.652 3.425l-8.613 8.543c-.352.349-.79.598-1.27.721l-3.02.778a1 1 0 0 1-1.218-1.22l.79-3.051c.118-.456.355-.872.687-1.206l8.57-8.64a2.88 2.88 0 1 1 4.074 4.075Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Posts</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/profile/" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            <li>
                <a href="/auth/logout" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13.49 5.48c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2zm-3.6 13.9l1-4.4l2.1 2v6h2v-7.5l-2.1-2l.6-3c1.3 1.5 3.3 2.5 5.5 2.5v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1c-.3 0-.5.1-.8.1l-5.2 2.2v4.7h2v-3.4l1.8-.7l-1.6 8.1l-4.9-1l-.4 2l7 1.4z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<script>
    function getGreetings() {
        var today = new Date();
        var hours = today.getHours();

        var greetings;

        if (hours >= 5 && hours < 12) {
            greetings = "Selamat Pagi";
        } else if (hours >= 12 && hours < 15) {
            greetings = "Selamat Siang";
        } else if (hours >= 15 && hours < 22) {
            greetings = "Selamat Sore";
        } else {
            greetings = "Selamat Malam";
        }

        return greetings;
    }

    var greetingsText = getGreetings();
    document.getElementById("greetings").innerText = greetingsText;
</script>
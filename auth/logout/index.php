<?php
session_start();

// Hapus semua session
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: /");
exit;

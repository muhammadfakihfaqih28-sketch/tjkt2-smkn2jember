<?php

// 1. Cek apakah vendor autoload ada
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    die("Error: Folder vendor belum terinstal. Pastikan composer install berjalan di Vercel.");
}

// 2. Routing file statis (CSS, JS, Gambar)
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . '/../public' . $uri)) {
    return false;
}

// 3. Jalankan Laravel
require __DIR__ . '/../public/index.php';
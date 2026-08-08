<?php

// Arahkan direktori penyimpanan temporary Laravel ke /tmp Vercel
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    @mkdir($storagePath . '/framework/views', 0755, true);
    @mkdir($storagePath . '/framework/cache/data', 0755, true);
    @mkdir($storagePath . '/framework/sessions', 0755, true);
    @mkdir($storagePath . '/bootstrap/cache', 0755, true);
}

putenv("APP_STORAGE_PATH={$storagePath}");
putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");

// Tampilkan error detail jika terjadi masalah
ini_set('display_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../public/index.php';
<?php

// Paksa Laravel memakai folder /tmp bawaan Vercel untuk cache & storage
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    mkdir($storagePath . '/framework/views', 0755, true);
    mkdir($storagePath . '/framework/cache/data', 0755, true);
    mkdir($storagePath . '/framework/sessions', 0755, true);
}

putenv("APP_STORAGE_PATH={$storagePath}");
putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");

require __DIR__ . '/../public/index.php';
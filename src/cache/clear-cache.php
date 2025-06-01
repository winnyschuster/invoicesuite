<?php

$files = glob(__DIR__ . '/*.cache');

foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
        echo "Gelöscht: " . basename($file) . PHP_EOL;
    }
}

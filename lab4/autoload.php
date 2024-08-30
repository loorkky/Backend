<?php

function myAutoload($className) {
    $className = ltrim($className, '\\');
    $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . $fileName;

    if (file_exists($filePath)) {
        require_once $filePath;
    } else {
        trigger_error("Файл $filePath не знайдено!", E_USER_WARNING);
    }
}

spl_autoload_register('myAutoload');


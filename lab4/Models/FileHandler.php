<?php
namespace Models;

class FileHandler {
    public static $dir = "text/";

    public static function readFile($filename) {
        $filePath = self::$dir . $filename;
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            return "File not found: {$filename}";
        }
    }

    public static function writeFile($filename, $content) {
        $filePath = self::$dir . $filename;
        $result = file_put_contents($filePath, $content, FILE_APPEND);
        return $result !== false;
    }

    public static function clearFile($filename) {
        $filePath = self::$dir . $filename;
        $result = file_put_contents($filePath, '');
        return $result !== false;
    }
}

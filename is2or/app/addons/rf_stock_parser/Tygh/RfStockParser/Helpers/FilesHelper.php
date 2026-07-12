<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Helpers;

use Tygh\Registry;
use Tygh\Http;

class FilesHelper
{
    /** @see fn_get_server_data */
    public function getServerUploadedPath($val, array $allowed_paths = [])
    {
        if (defined('IS_WINDOWS')) {
            $val = str_replace('\\', '/', $val);
        }

        $allowed_paths = $allowed_paths ?: [
            fn_get_files_dir_path(),
            fn_get_public_files_path(),
        ];

        $val = fn_normalize_path($val);

        if (Registry::get('runtime.allow_upload_external_paths') && strpos($val, Registry::get('config.dir.root')) === 0) {
            $allowed_paths = [$val];
        }

        setlocale(LC_ALL, 'en_US.UTF8');

        foreach ($allowed_paths as $root_path) {
            if (strpos($val, $root_path) === 0) {
                $path = $val;
            } else {
                $path = fn_normalize_path($root_path . $val);
            }

            if (strpos($path, $root_path) === 0 && file_exists($path)) {
                return $path;
            }
        }
    }

    public function getExecutablePhp()
    {
        $phpPath = fn_rf_stock_parser_get_options(null, 'php_executable_path');

        if (empty($phpPath)) {
            $phpPath = trim(shell_exec('which php'));
        }

        return $phpPath;
    }

    public function imageToServer($image): ?string
    {
        $imageName = sha1($image);
        $prefix = fn_get_cache_path(false);

        fn_mkdir($prefix . 'tmp');
        $tempFile = fn_normalize_path($prefix . 'tmp/' . $imageName);

        Http::get($image, [], [
            'binary_transfer' => true,
            'write_to_file' => $tempFile,
            'connection_timeout' => 3000,
            'execution_timeout' => 10000,
        ]);

        $mimeToExtensionMap = [
            'image/jpeg' => '.jpg',
            'image/jpg' => '.jpg',
            'image/png' => '.png',
            'image/gif' => '.gif',
            'image/bmp' => '.bmp',
        ];

        $mineType = fn_get_mime_content_type($tempFile, false, '');

        if (isset($mimeToExtensionMap[$mineType])) {
            $fileFullName = sha1_file($tempFile) . $mimeToExtensionMap[$mineType];
        } else {
            return null;
        }

        $folder = Registry::get('config.dir.files') . 'rf_stock_parser_tmp/';
        fn_mkdir($folder);
        $finalPath = $folder . $fileFullName;
        $result = fn_copy($tempFile, $finalPath);

        return $result ? $finalPath : null;
    }
}

<?php

spl_autoload_register(
    function ($class_name) {
        $preg_match = preg_match('/^Psr\\\/', $class_name);

        if (1 === $preg_match) {
            include_once __DIR__ . '/Psr.php';
        } elseif (false === $preg_match) {
            assert(false, 'Error de preg_match().');
        }
    }
);

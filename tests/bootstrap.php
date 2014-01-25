<?php

require __DIR__ . '/vendor/autoload.php';

function contentCheckerAutoload($className)
{
    $classFileName = $className . '.php';
    $classFileNameNamespaceToDirSeparator = str_replace('\\', DIRECTORY_SEPARATOR, $classFileName);
    $path = __DIR__ . '/../src/';
    $fullPath = $path . $classFileNameNamespaceToDirSeparator;
    if (is_file($fullPath)) {
        require $fullPath;
    }
}

spl_autoload_register('contentCheckerAutoload');

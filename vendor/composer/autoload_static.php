<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb289cc6e7dcd9a33eebf084a98f26434
{
    public static $files = array (
        '9e4824c5afbdc1482b6025ce3d4dfde8' => __DIR__ . '/..' . '/league/csv/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static $classMap = array (
        'Log404' => __DIR__ . '/../..' . '/model/log404.class.php',
        'Log404IndexManagerController' => __DIR__ . '/../..' . '/controllers/default/index.class.php',
        'Log404Items' => __DIR__ . '/../..' . '/model/log404/log404items.class.php',
        'Log404Items_mysql' => __DIR__ . '/../..' . '/model/log404/mysql/log404items.class.php',
        'Log404\\ClearController' => __DIR__ . '/../..' . '/controllers/ClearController.php',
        'Log404\\DeleteController' => __DIR__ . '/../..' . '/controllers/DeleteController.php',
        'Log404\\DownloadController' => __DIR__ . '/../..' . '/controllers/DownloadController.php',
        'Log404\\IndexController' => __DIR__ . '/../..' . '/controllers/IndexController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb289cc6e7dcd9a33eebf084a98f26434::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb289cc6e7dcd9a33eebf084a98f26434::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb289cc6e7dcd9a33eebf084a98f26434::$classMap;

        }, null, ClassLoader::class);
    }
}
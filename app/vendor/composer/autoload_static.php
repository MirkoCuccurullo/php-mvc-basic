<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit331d72a2db6a73411ba2319c3f8606d8
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Routers\\' => 8,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Routers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routers',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit331d72a2db6a73411ba2319c3f8606d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit331d72a2db6a73411ba2319c3f8606d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit331d72a2db6a73411ba2319c3f8606d8::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda098f25ab892ed0f8e56fa758d16c00
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda098f25ab892ed0f8e56fa758d16c00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda098f25ab892ed0f8e56fa758d16c00::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
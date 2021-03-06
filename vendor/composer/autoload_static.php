<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit699c4c8a15d1a3156f9a63b436e038df
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'E' => 
        array (
            'Embed\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Embed\\' => 
        array (
            0 => __DIR__ . '/..' . '/embed/embed/src',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit699c4c8a15d1a3156f9a63b436e038df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit699c4c8a15d1a3156f9a63b436e038df::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

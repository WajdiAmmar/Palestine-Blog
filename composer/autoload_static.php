<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37b8fd85ac1c2d2688b274793aead717
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Maram\\Ds2\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Maram\\Ds2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37b8fd85ac1c2d2688b274793aead717::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37b8fd85ac1c2d2688b274793aead717::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37b8fd85ac1c2d2688b274793aead717::$classMap;

        }, null, ClassLoader::class);
    }
}
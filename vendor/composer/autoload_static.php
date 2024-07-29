<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit408817205a33e7838e813999a24bffc4
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gdsd1\\Minimvc\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gdsd1\\Minimvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit408817205a33e7838e813999a24bffc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit408817205a33e7838e813999a24bffc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit408817205a33e7838e813999a24bffc4::$classMap;

        }, null, ClassLoader::class);
    }
}

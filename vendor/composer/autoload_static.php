<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ce7b6581fdd56d95107bcf778fb95e5
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeDevs\\Academy\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeDevs\\Academy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ce7b6581fdd56d95107bcf778fb95e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ce7b6581fdd56d95107bcf778fb95e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ce7b6581fdd56d95107bcf778fb95e5::$classMap;

        }, null, ClassLoader::class);
    }
}

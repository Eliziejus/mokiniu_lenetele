<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25eeff111f06b6e9014fab55b69e70a5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProductsApp\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProductsApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25eeff111f06b6e9014fab55b69e70a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25eeff111f06b6e9014fab55b69e70a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25eeff111f06b6e9014fab55b69e70a5::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e5617178cd020ca303cabcd8257035f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sophiakuznetsova\\RestClient\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sophiakuznetsova\\RestClient\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e5617178cd020ca303cabcd8257035f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e5617178cd020ca303cabcd8257035f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e5617178cd020ca303cabcd8257035f::$classMap;

        }, null, ClassLoader::class);
    }
}
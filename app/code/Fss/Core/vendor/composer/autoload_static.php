<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94be9ae8b59a6019406529d984579a8f
{
    public static $files = array (
        'a2fb527bc8130825be326b7bc7b4e8e6' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fss\\Core\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fss\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94be9ae8b59a6019406529d984579a8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94be9ae8b59a6019406529d984579a8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94be9ae8b59a6019406529d984579a8f::$classMap;

        }, null, ClassLoader::class);
    }
}
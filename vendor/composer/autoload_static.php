<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd472be6e215ecdc1360bcb816588beb1
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JadaNails\\Includes\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JadaNails\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd472be6e215ecdc1360bcb816588beb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd472be6e215ecdc1360bcb816588beb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd472be6e215ecdc1360bcb816588beb1::$classMap;

        }, null, ClassLoader::class);
    }
}
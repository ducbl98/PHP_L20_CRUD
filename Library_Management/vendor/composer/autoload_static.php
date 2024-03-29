<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc80af202c468709da520c1cb15c9388f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Database\\' => 13,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc80af202c468709da520c1cb15c9388f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc80af202c468709da520c1cb15c9388f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit420973ee92328aba1767fbc31211b1b8
{
    public static $files = array (
        '1c386f39c6fbe93ca43e8368c70f3e1d' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Counter' => __DIR__ . '/../..' . '/Model/Counter.php',
        'User' => __DIR__ . '/../..' . '/Model/user.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit420973ee92328aba1767fbc31211b1b8::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c04c3b5d2e2d19c88d38081245dd7ae
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9c04c3b5d2e2d19c88d38081245dd7ae::$classMap;

        }, null, ClassLoader::class);
    }
}
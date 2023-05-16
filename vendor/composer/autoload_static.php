<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opis\\ORM\\' => 9,
            'Opis\\Database\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opis\\ORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/orm/src',
        ),
        'Opis\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/database/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33528605a8d352a53b3bdee29e54ef84
{
    public static $files = array (
        'a3ac1c34250cf09697c87d25f56df24e' => __DIR__ . '/../..' . '/configuracao.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sistema\\' => 8,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sistema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sistema',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33528605a8d352a53b3bdee29e54ef84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33528605a8d352a53b3bdee29e54ef84::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33528605a8d352a53b3bdee29e54ef84::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c857ec249cf4c09e261b9fd5dd8d92e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MySRC\\' => 6,
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MySRC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Bangun2',
        ),
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Bangun1',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c857ec249cf4c09e261b9fd5dd8d92e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c857ec249cf4c09e261b9fd5dd8d92e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

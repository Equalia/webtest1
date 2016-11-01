<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8f19c9e4ec0252ea8bed36cbe8a58c6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
        'A' => 
        array (
            'Aws' => 
            array (
                0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8f19c9e4ec0252ea8bed36cbe8a58c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8f19c9e4ec0252ea8bed36cbe8a58c6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc8f19c9e4ec0252ea8bed36cbe8a58c6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

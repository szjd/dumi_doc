<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c5702c7e02cd3226420dd48de7f52c3
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c5702c7e02cd3226420dd48de7f52c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c5702c7e02cd3226420dd48de7f52c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

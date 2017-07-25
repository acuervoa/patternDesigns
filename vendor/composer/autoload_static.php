<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9467fbbe4a57fe648e364e45940e0db9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PatternDesign\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PatternDesign\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9467fbbe4a57fe648e364e45940e0db9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9467fbbe4a57fe648e364e45940e0db9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

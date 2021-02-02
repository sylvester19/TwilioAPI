<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite953fac245bd0084ff2d9131d8c7784c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite953fac245bd0084ff2d9131d8c7784c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite953fac245bd0084ff2d9131d8c7784c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite953fac245bd0084ff2d9131d8c7784c::$classMap;

        }, null, ClassLoader::class);
    }
}
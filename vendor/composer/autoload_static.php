<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe7e9d4a168f972fbf4e8bc7849a4d88
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe7e9d4a168f972fbf4e8bc7849a4d88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe7e9d4a168f972fbf4e8bc7849a4d88::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

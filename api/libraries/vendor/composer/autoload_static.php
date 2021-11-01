<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit086ab4b6ee3cf874d5f295b352b84582
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit086ab4b6ee3cf874d5f295b352b84582::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit086ab4b6ee3cf874d5f295b352b84582::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit086ab4b6ee3cf874d5f295b352b84582::$classMap;

        }, null, ClassLoader::class);
    }
}

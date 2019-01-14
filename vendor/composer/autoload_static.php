<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31c3d40d2223a48e532b15063a50aad0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31c3d40d2223a48e532b15063a50aad0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31c3d40d2223a48e532b15063a50aad0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
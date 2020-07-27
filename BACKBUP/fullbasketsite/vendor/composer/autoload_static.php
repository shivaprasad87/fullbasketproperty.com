<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb0fc17bf642772265ff0226932f4206
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
        '5d7bf3377b44c338fa60c40e15cf75c9' => __DIR__ . '/../..' . '/application/core/Admin_Controller.php',
        'ddab51fec8dfa04457d89aabbf3c6e71' => __DIR__ . '/../..' . '/application/core/API_Controller.php',
        '31704a067dcda86a0c0228dc42f0224c' => __DIR__ . '/../..' . '/application/core/Cron_Controller.php',
        'c58d272910bc0fc38b36d5716c558a4b' => __DIR__ . '/../..' . '/application/core/Private_Controller.php',
        '7a98d4c4e0c67f349c9c97038800b0ec' => __DIR__ . '/../..' . '/application/core/Public_Controller.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb0fc17bf642772265ff0226932f4206::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb0fc17bf642772265ff0226932f4206::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcb0fc17bf642772265ff0226932f4206::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

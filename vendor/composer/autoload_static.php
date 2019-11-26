<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit061f1b10d8b959fd9f10503253eebea8
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/basic-php/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/basic-php/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/basic-php/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/basic-php/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/basic-php/core/Router.php',
        'App\\Models\\Projects' => __DIR__ . '/../..' . '/basic-php/app/models/Project.php',
        'ComposerAutoloaderInit061f1b10d8b959fd9f10503253eebea8' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit061f1b10d8b959fd9f10503253eebea8' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/basic-php/core/database/Connection.php',
        'Post' => __DIR__ . '/../..' . '/arrays/index.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/basic-php/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit061f1b10d8b959fd9f10503253eebea8::$classMap;

        }, null, ClassLoader::class);
    }
}

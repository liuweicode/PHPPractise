<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c6fdcc62cc380341a1999ac2a6bbeae
{
    public static $prefixesPsr0 = array (
        'd' => 
        array (
            'dflydev\\markdown' => 
            array (
                0 => __DIR__ . '/..' . '/dflydev/markdown/src',
            ),
        ),
        'S' => 
        array (
            'Suin\\RSSWriter' => 
            array (
                0 => __DIR__ . '/..' . '/suin/php-rss-writer/Source',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0c6fdcc62cc380341a1999ac2a6bbeae::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
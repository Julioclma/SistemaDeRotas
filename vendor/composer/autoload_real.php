<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite84cdc24e8c9a31a278cb283293de78e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite84cdc24e8c9a31a278cb283293de78e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite84cdc24e8c9a31a278cb283293de78e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite84cdc24e8c9a31a278cb283293de78e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
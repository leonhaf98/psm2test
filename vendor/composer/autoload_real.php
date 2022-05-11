<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9c45a40109e98a29e1daeb3e2fcd911d
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit9c45a40109e98a29e1daeb3e2fcd911d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9c45a40109e98a29e1daeb3e2fcd911d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9c45a40109e98a29e1daeb3e2fcd911d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

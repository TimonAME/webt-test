<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9c635d2dfa1928c60adc5d77917bcc27
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

        spl_autoload_register(array('ComposerAutoloaderInit9c635d2dfa1928c60adc5d77917bcc27', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9c635d2dfa1928c60adc5d77917bcc27', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9c635d2dfa1928c60adc5d77917bcc27::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

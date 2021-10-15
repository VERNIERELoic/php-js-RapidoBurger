<?php

class Autoloader
{

    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class)
    {

        $parts = preg_split('#\\\#', $class);
        $className = array_pop($parts);


        $path = implode(DIRECTORY_SEPARATOR, $parts);
        $file = $className . '.php';

        $filepath = dirname(__FILE__) . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $file;
        require_once $filepath;
    }
}

<?php
/**
 * Autoloader
 */

namespace Core;

/**
 * Class Autoloader
 * @package Core
 */
class Autoloader
{
    /**
     * Enregistre une fonction en tant qu'implémentation de __autoload()
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * la fonction d'autoloading charge une classe indéfinie
     * @param $class
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0){

            $class = str_replace(__NAMESPACE__ . '\\', '', $class);

            $class = str_replace('\\', '/', $class);

            require __DIR__ . '/' . $class . '.php';
        }
    }
}

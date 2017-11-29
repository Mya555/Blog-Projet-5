<?php
/*
 * Autoloader
 * l'autoloader sera automatiquement appelée
 * si vous essayez d'utiliser une classe qui n'est pas encore définie.
 */

namespace App;

/**
 * Class Autoloader
 * @package App
 */
class Autoloader
{
    /**
     * Enregistre l'autoloader , peut être appelé plusieurs fois à l'inverse de la fonction 'autoload'
     *
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
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

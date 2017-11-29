<?php


namespace Core;


/**
 * Class Config
 * @package Core
 */
class Config
{
    /**
     * @var array|mixed
     */
    private $settings = [];

    /**
     * @var
     */
    private static $_instance;

    /**
     * @param $file
     * @return Config
     */
    public static function getInstance($file)
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new Config($file);
        }

        return self::$_instance;
    }

    /**
     * Config constructor.
     * @param $file
     */
    public function __construct($file)
    {

        $this->settings = require($file);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        if(!isset($this->settings[$key]))
        {
            return null;
        }
        return $this->settings[$key];
    }

}
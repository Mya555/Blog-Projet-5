<?php
/**
 * Created by PhpStorm.
 * User: Bella
 * Date: 13/09/2017
 * Time: 23:33
 */

namespace App\Controller;


use Core\Controller\Controller;

use \App;

/**
 * Class AppController
 * @package App\Controller
 */
class AppController extends Controller
{
    /**
     * @var string
     */
    protected $template = 'index';


    /**
     * AppController constructor.
     */
    public function __construct()
        {
            $this->viewPath = ROOT . '/app/Views/';

        }

    /**
     * @param $model_name
     */
    protected function loadModel($model_name) {

            $this->$model_name =  App::getInstance()->getTable($model_name);

        }

}
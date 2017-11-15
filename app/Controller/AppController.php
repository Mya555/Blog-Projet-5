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

class AppController extends Controller
{
        protected $template = 'index';



        public function __construct()
        {
            $this->viewPath = ROOT . '/app/Views/';

        }

        protected function loadModel($model_name) {

            $this->$model_name =  App::getInstance()->getTable($model_name);

        }

}
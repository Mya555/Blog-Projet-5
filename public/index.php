<?php

/**
 * remplace  la fonction par le mot ROOT
 */
define('ROOT', dirname(__DIR__));

   require ROOT . '/app/App.php';




    /*
     * La fonction load s'occupe du chargement des classes d'autoloading
    */
   App::load();


    if (isset($_GET['p'])){

        $page = $_GET['p'];
    }
    else{

        $page = 'posts.index';


    }


        $page = explode('.', $page);


        $controller = '\App\Controller\\'  . ucfirst($page[0]) . 'Controller';

        $action = $page[1];

        $controller = new $controller();

        $controller->$action();

<?php
        namespace Core\Controller;


        /**
         * Class Controller
         * @package Core\Controller
         *
         */
        class Controller {

        protected $viewPath;

        protected $template;


            public function render($view, $variables = []) {

            ob_start();

            /*
             * extract — Importe les variables dans la table
             */
            extract($variables);

            require ($this->viewPath . str_replace('.', '/', $view) . '.php');

            $content = ob_get_clean();

            require($this->viewPath . 'templates/' . $this->template . '.php');



        }

            /**
             * For not found pages
             */
            protected function notFound() {

                header('HTTP/1.0 404 Not Found');

                die('Page introuvable');

            }


        }
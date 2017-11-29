<?php

    namespace App\Entity;

    use Core\Entity\Entity;

    /**
     * Class PostEntity
     * @package App\Entity
     */
    class PostEntity extends Entity{


        /**
         * @return string
         */
        public function getUrl(){

            return 'index.php?p=posts.show&id=' . $this->id;

        }

        /**
         * @return string
         */
        public function getExtrait(){


            $html = '<p>' . substr($this->chapo, 0, 255) . '...</p>'; //substr — Retourne un segment de chaîne

            $html .= '<p>' . $this->dateDernierModif . '</p>';

            $html .= '<p><a href = "' . $this->getUrl() . '">Voir le blog post ..</a></p>';

            return $html;

        }

    }


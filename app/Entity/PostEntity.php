<?php

    namespace App\Entity;

    use Core\Entity\Entity;

        class PostEntity extends Entity{

        public function getUrl(){

            return 'index.php?p=posts.show&id=' . $this->id;

        }

        public function getExtrait(){


            $html = '<p>' . substr($this->chapo, 0, 255) . '...</p>';

            $html .= '<p>' . $this->dateDernierModif . '</p>';

            $html .= '<p><a href = "' . $this->getUrl() . '">Voir le blog post ..</a></p>';

            return $html;

        }

    }


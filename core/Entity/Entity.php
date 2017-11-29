<?php

namespace Core\Entity;

class Entity
{
    /**
     * __get est appelée lorsque l'on essaye d'accéder à un attribut qui n'existe pas ou auquel on n'a pas accès.
     * Elle prend un paramètre : le nom de l'attribut auquel on a essayé d'accéder.
     */
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);

        $this->$key = $this->$method();

        return $this->$key;
    }
}
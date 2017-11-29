<?php


namespace App\Table;

use Core\Table\Table;

/**
 * Class PostTable
 * @package App\Table
 */
class PostTable extends Table
{

    /**
     * @var string
     */
    protected $table = 'articles';


    /**
     * @return array|bool|mixed|\PDOStatement
     */
    public function last()
    {
        return $this->query("

        SELECT id, titre, contenu, DATE_FORMAT(dateDernierModif, 'le %d/%m/%Y à %Hh%imin%ss') AS dateDernierModif, auteur, chapo
        
        FROM articles
        
        ORDER BY dateDernierModif DESC 
        ");
    }


    /**
     * @param $id
     * @return array|bool|mixed|\PDOStatement
     */
    public function find($id){

        return $this->query("

        SELECT id, titre, contenu, DATE_FORMAT(dateDernierModif, 'le %d/%m/%Y à %Hh%imin%ss') AS dateDernierModif, auteur, chapo
        
        FROM articles
        
         WHERE id = ? 
        ", [$id], true);

    }




}
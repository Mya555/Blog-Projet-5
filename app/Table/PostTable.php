<?php


namespace App\Table;

use Core\Table\Table;

class PostTable extends Table
{

    protected $table = 'articles';



    public function last()
    {
        return $this->query("

        SELECT id, titre, contenu, DATE_FORMAT(dateDernierModif, 'le %d/%m/%Y à %Hh%imin%ss') AS dateDernierModif, auteur, chapo
        
        FROM articles
        
        ORDER BY dateDernierModif DESC 
        ");
    }






    public function find($id){

        return $this->query("

        SELECT id, titre, contenu, DATE_FORMAT(dateDernierModif, 'le %d/%m/%Y à %Hh%imin%ss') AS dateDernierModif, auteur, chapo
        
        FROM articles
        
         WHERE id = ? 
        ", [$id], true);

    }




}